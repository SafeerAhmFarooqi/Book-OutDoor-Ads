<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\City;
use App\Models\Led;

class LedSearchResults extends Component
{
    public $find;
    public $location;
    public $selectedCity;

    public function render()
    {
        $cities=City::all();
        $leds=Led::when($this->selectedCity, function($query) {
            return $query->where('city_id', $this->selectedCity);
        }) 
        ->when($this->find, function($query) {
            return $query->where('title', 'like', '%'.$this->find.'%');
        })   
        ->when($this->location, function($query) {
            return $query->where('location', 'like', '%'.$this->location.'%');
        })     
        ->get();
        return view('livewire.led-search-results',[
            'cities'=>$cities,
            'leds'=>$leds,
        ]);
    }
}
