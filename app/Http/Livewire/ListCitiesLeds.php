<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Led;
use App\Models\City;

class ListCitiesLeds extends Component
{
    public $selectedId;

    public function render()
    {

        $leds=Led::where('city_id',$this->selectedId?$this->selectedId : 0)->get();
        $cities=City::all();
        $selectedCityName=City::find($this->selectedId?$this->selectedId : 0);
        return view('livewire.list-cities-leds',[
            'leds'=>$leds,
            'cities'=>$cities,
            'selectedCityName'=>$selectedCityName?$selectedCityName : '',
        ]);
    }
}
