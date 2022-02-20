<?php

namespace App\Http\Livewire;

use App\Models\Country;
use App\Models\State;
use Livewire\Component;
use Livewire\WithPagination;

class StateController extends Component
{
    use WithPagination;
    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public $addStateModal = false;
    public $editStateModal = false;
    public $selectCountry,$selectState;
    public $state,$countriId;

    protected $rules=['selectCountry'=>'required', 'selectState'=>'required'];

    public function addState(){
        $data = $this->validate();
        State::create([
            'name'=>$data['selectState'],
            'country_id'=>$data['selectCountry']
        ]);
        $this->addStateModal=false;
    }

    public function updateState(){
        $data = $this->validate();
        $this->state->update([
            'name'=>$data['selectState'],
            'country_id'=>$data['selectCountry']
        ]);
        $this->state->save();
        $this->editStateModal=false;
    }

    public function deleteState(State $state){
        $state->delete();
    }

    public function editState($stateId){
        $this->state=State::find($stateId);
        $this->countryId=$this->state->country_id;
        $this->selectState=$this->state->name;
        $this->selectCountry=$this->state->country_id;
        $this->editStateModal=true;
    }

    public function render()
    {

        $states = State::orderBy('name','asc')->paginate(10);
        $countries = Country::orderBy('name', 'asc')->get();
        return view('livewire.state-controller',['states'=>$states,'countries'=>$countries]);
    }
}
