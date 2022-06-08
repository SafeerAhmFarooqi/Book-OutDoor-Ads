<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\City;
use App\Models\Led;
use App\Models\SubOrders;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class LedSearchResults extends Component
{
    public $find;
    public $location;
    public $selectedCity;
    public $selectedDateRange='';
    public $selectedStartDate='';
    public $selectedEndDate='';
    public $minPriceRange;
    public $maxPriceRange;

    public function render()
    {
        $loop1=0;
        $save=true;
        $finalLeds = collect();
        $cities=City::all();
        $leds=Led::with('subOrders')
        ->whereBetween('price', [$this->minPriceRange, $this->maxPriceRange])
        ->when($this->selectedCity, function($query) {
            return $query->where('city_id', $this->selectedCity);
        }) 
        ->when($this->find, function($query) {
            return $query->where('title', 'like', '%'.$this->find.'%');
        })   
        ->when($this->location, function($query) {
            return $query->where('location', 'like', '%'.$this->location.'%');
        })   
        ->get();
        if($this->selectedDateRange)
        {
            $selectedStartDate=Carbon::parse($this->selectedStartDate)->format('d/m/Y');
            $selectedEndDate=Carbon::parse($this->selectedEndDate)->format('d/m/Y');
            foreach ($leds as $led) {
                $save=true;
                    foreach ($led->subOrders as $value) {
                        if(Carbon::parse($value->startDate)->format('d/m/Y')<=$selectedStartDate&& Carbon::parse($value->endDate)->format('d/m/Y')>=$selectedStartDate||Carbon::parse($value->startDate)->format('d/m/Y')<=$selectedEndDate&& Carbon::parse($value->endDate)->format('d/m/Y')>=$selectedEndDate)
                        {
                            $loop1++;
                           $save=false;
                           break;
                                    
                        }
                        
                    }
                    if($save)
                    {
                        $finalLeds->push($led);
                    }
  
            }
        }
        return view('livewire.led-search-results',[
            'cities'=>$cities,
            'leds'=>$this->selectedDateRange?$finalLeds :$leds ,
            'loop1'=>$loop1,
            // 'selectedStartDate'=>$selectedStartDate,
            // 'selectedEndDate'=>$selectedEndDate,
        ]);
    }
}
