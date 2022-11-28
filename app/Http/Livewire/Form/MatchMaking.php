<?php

namespace App\Http\Livewire\Form;

use App\Models\MatchMaking as Model;
use App\Models\School;
use App\Models\Sport;
use Carbon\Carbon;
use Livewire\Component;

class MatchMaking extends Component
{
    public $optionTeam;
    public $optionSport;
    public $teamA;
    public $teamB;
    public $sport;
    public $data;
    public $dataId;
    public $action;

    public function mount(){
        $this->optionTeam=eloquent_to_options(School::get(),'id','name');
        $this->optionSport=eloquent_to_options(Sport::get());
        $this->data=form_model(Model::class,$this->dataId);
    }
    public function create(){
//        dd('asd');
        $this->validate();
        $this->resetErrorBag();
        if ($this->data['date_match']==null){
            $this->data['date_match']=Carbon::now();
        }
        Model::create($this->data);
//        dd('asd');
        $this->emit('redirect', route(  'match-making.index'));
    }

    protected function getRules()
    {
        return Model::getRules();
    }

    public function render()
    {
        return view('livewire.form.match-making');
    }
}
