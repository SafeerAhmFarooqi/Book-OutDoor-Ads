<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\City;
use App\Models\Country;

class CityCountry extends Component
{
    public $selectedCountry = '';
    public $selectedCity = '';
    public $cities = '';

    public function dehydrate()
    {
        $this->dispatchBrowserEvent('getFields',['name'=>$this->cities]);
    }

    public function render()
    {
        $this->cities = City::where('country_id',$this->selectedCountry)->get();
        return view('livewire.city-country',[
            'countries' => Country::where('status',true)->get(),
        ]);
    }
}
