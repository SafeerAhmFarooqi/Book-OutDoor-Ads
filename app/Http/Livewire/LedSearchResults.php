<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\City;
use App\Models\Led;
use App\Models\SubOrders;
use App\Models\BookingDates;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class LedSearchResults extends Component
{
    public $find='';
    public $location='';
    public $selectedCity='';
    public $selectedDateRange='';
    public $selectedStartDate='';
    public $selectedEndDate='';
    public $minPriceRange='';
    public $maxPriceRange='';
    public $priceRange='';

    public function render()
    {
        $loop1=0;
        $save=true;
        $finalLeds = collect();
        $this->getPriceRange();
        $cities=City::all();
        $leds=Led::when($this->location, function($query) {
                return $query->where('location', 'like', '%'.$this->location.'%');
            })
        ->when($this->selectedCity, function($query) {
                return $query->where('city_id', $this->selectedCity);
            })
        ->when($this->priceRange, function($query) {
                return $query->whereBetween('price', [$this->minPriceRange, $this->maxPriceRange]);
            })
            // ->when(Carbon::parse($this->selectedEndDate)>=Carbon::now()&&$this->selectedEndDate, function($query) {
            //    // dd('safeer');
            //     return $query->whereBetween('price', [$this->minPriceRange, $this->maxPriceRange]);
            // })
        ->get();
//dd($leds);
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
      // dd($finalLeds);

        
        //$bookingDates=BookingDates::
        // $leds=Led::with('subOrders')
        // ->whereBetween('price', [$this->minPriceRange, $this->maxPriceRange])
        // ->when($this->selectedCity, function($query) {
        //     return $query->where('city_id', $this->selectedCity);
        // }) 
        // ->when($this->find, function($query) {
        //     return $query->where('title', 'like', '%'.$this->find.'%');
        // })   
        // ->when($this->location, function($query) {
        //     return $query->where('location', 'like', '%'.$this->location.'%');
        // })   
        // ->get();
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
        return view('livewire.led-search-results',[
            'cities'=>$cities,
            'leds'=>$finalLeds,
            'loop1'=>$loop1,
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
