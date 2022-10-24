<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\City;
use App\Models\Led;
use App\Models\SubOrders;
use App\Models\BookingDates;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Session;

class MapLedSearchResults extends Component
{
    public $find;
    public $location='';
    public $selectedCity;
    public $selectedDateRange='';
    public $selectedStartDate='';
    public $selectedEndDate='';
    public $coordinates=[];
    public $minPriceRange='';
    public $maxPriceRange='';
    public $priceRange='';
    public $count = 0;
    public $bookingDates=[];
    public $alert=[];
    public $error=[];
    public $totalDays=[];
    public $totalPrice=[];
    public $sessionFlash=[];
    public $sessionFlashSuccess=[];
 
    public function increment()
    {
        $this->count++;
    }

    function geoLocate($address,$id=null)
    {
        try {
            $lat = 0;
            $lng = 0;
    
            $data_location = "https://maps.google.com/maps/api/geocode/json?key=AIzaSyAIeDyz_v1KkoU3ZTRqK5e-9Ax1lNjSIEI&address=".str_replace(" ", "+", $address)."&sensor=false";
            $data = file_get_contents($data_location);
            usleep(200000);
            // turn this on to see if we are being blocked
            // echo $data;
            $data = json_decode($data);
            if ($data->status=="OK") {
                $lat = $data->results[0]->geometry->location->lat;
                $lng = $data->results[0]->geometry->location->lng;
    
                if($lat && $lng) {
                    return array(
                        'status' => true,
                        'lat' => $lat, 
                        'long' => $lng,
                        'id'=>$id,
                        'title' => (Led::find($id))->title,
                        'price' => (Led::find($id))->price, 
                        'image' => asset('storage/'.((Led::find($id))->image->path??'')),
                        'led' => Led::find($id),
                        'google_place_id' => $data->results[0]->place_id
                    );
                }
            }
            if($data->status == 'OVER_QUERY_LIMIT') {
                return array(
                    'status' => false, 
                    'message' => 'Google Amp API OVER_QUERY_LIMIT, Please update your google map api key or try tomorrow'
                );
            }
    
        } catch (Exception $e) {
    
        }
    
        return array('lat' => null, 'long' => null, 'status' => false);
    }

    public function dehydrate()
    {
       // $this->dispatchBrowserEvent('getLocation');
        $this->dispatchBrowserEvent('getLocation',['name'=>$this->coordinates] );
    }

    // public function applyFilter()
    // {
    //    // $this->dispatchBrowserEvent('getLocation');
    //     $this->dispatchBrowserEvent('getLocation',['name'=>$this->coordinates] );
    // }

    public function SubmitBookDates($id)
    {
        //dd($id);
        if (!$this->error[$id]&&@$this->bookingDates[$id]) {
            session()->push('cart.items', $id.'*'.$this->bookingDates[$id].'*'.$this->totalDays[$id]);
            $this->sessionFlashSuccess[$id]="Artikel erfolgreich in den Einkaufswagen gelegt";
            return redirect()->route('find.map.led');
        } else {
            $this->sessionFlash[$id]="Ungültiges Datum Bitte erneut auswählen";
        }
        
    }

    public function render()
    {
        $loop1=0;
        $save=true;
        $finalLeds = collect();
        $this->getPriceRange();
        $cities=City::all();
        $leds=Led::
        when($this->priceRange, function($query) {
            return $query->whereBetween('price', [$this->minPriceRange, $this->maxPriceRange]);
        })
        ->when($this->selectedCity, function($query) {
            return $query->where('city_id', $this->selectedCity);
        })
        ->when($this->location, function($query) {
            return $query->where('location', 'like', '%'.$this->location.'%');
        })     
        ->get();
        // if($this->selectedDateRange)
        // {
        //     $selectedStartDate=Carbon::parse($this->selectedStartDate)->format('d/m/Y');
        //     $selectedEndDate=Carbon::parse($this->selectedEndDate)->format('d/m/Y');
        //     foreach ($leds as $led) {
        //         $save=true;
        //             foreach ($led->subOrders as $value) {
        //                 if(Carbon::parse($value->startDate)->format('d/m/Y')<=$selectedStartDate&& Carbon::parse($value->endDate)->format('d/m/Y')>=$selectedStartDate||Carbon::parse($value->startDate)->format('d/m/Y')<=$selectedEndDate&& Carbon::parse($value->endDate)->format('d/m/Y')>=$selectedEndDate)
        //                 {
        //                     $loop1++;
        //                    $save=false;
        //                    break;
                                    
        //                 }
                        
        //             }
        //             if($save)
        //             {
        //                 $finalLeds->push($led);
        //             }
  
        //     }
        // }
        if($this->selectedStartDate&&$this->selectedEndDate&&Carbon::parse($this->selectedStartDate)<=Carbon::parse($this->selectedEndDate)&&Carbon::parse($this->selectedEndDate)>=Carbon::now()->format('Y-m-d'))
        {
            foreach ($leds as $led) {
             $bookingDates=BookingDates::
             where('led_id',$led->id)
             ->whereRelation('order', 'payment_status', true)->get();
             //dd($bookingDates);
             //dd(Carbon::parse($this->selectedEndDate));
             $startDate=Carbon::parse($this->selectedStartDate);
             $endDate=Carbon::parse($this->selectedEndDate);
             $differenceInRangeDates=$startDate->diffInDays($endDate)+1;  
           //  dd($differenceInRangeDates);       
             $exist=$bookingDates->whereBetween('bookdate',[$startDate,$endDate]);
                    $totalBookingDates=$bookingDates->count();
                    $bookingDatesInsideRange=$exist->count();
                   // dd($bookingDatesInsideRange);
                    //dd($differenceInRangeDates.' : '.$bookingDatesInsideRange); 
                     if($differenceInRangeDates>$bookingDatesInsideRange)
                     {
                         $finalLeds->push($led);            
                     }
                      
            }
        }elseif ($this->selectedEndDate&&Carbon::parse($this->selectedEndDate)<Carbon::now()->format('Y-m-d')) {
         $finalLeds = collect();
        }else {
         foreach ($leds as $led) {
             $finalLeds->push($led);    
         }  
        }
        $this->coordinates=[];
        foreach ($finalLeds  as $value) {
            array_push($this->coordinates,$this->geoLocate($value->location,$value->id)); 
        }
        return view('livewire.map-led-search-results',[
            'cities'=>$cities,
            'leds'=>$this->selectedDateRange?$finalLeds :$leds ,
            'loop1'=>$loop1,
            'coordinates'=>json_encode($this->coordinates),
            // 'selectedStartDate'=>$selectedStartDate,
            // 'selectedEndDate'=>$selectedEndDate,
        ]);
    }

    public function getPriceRange()
    {
        if ($this->priceRange) {
            $this->minPriceRange = strtok($this->priceRange,"-");
            $this->maxPriceRange = strtok("");
        }
        else
        {
            $this->minPriceRange='';
            $this->maxPriceRange='';
        }
    }
}
