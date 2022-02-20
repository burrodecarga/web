<?php

namespace App\Http\Livewire;

use App\Models\Country;
use App\Models\State;
use Livewire\Component;

class CountrySelect extends Component
{

    public $seleccionado=null;
    public $stateselect = null;
    public $countries;
    public $states;

    public function mount()
    {
        $this->countries = $countries = Country::All();
         }

    public function updatedseleccionado($value)
    {
        $this->states = State::where('country_id', $value)->get();

    }


    public function render()
    {

        return view('livewire.country-select', ['countries' => $this->countries]);
    }
}
