<?php

namespace App\Http\Livewire\Form;

use App\Models\MatchMaking as Model;
use App\Models\School;
use App\Models\Sport;
use Carbon\Carbon;
use Illuminate\Support\Str;
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
    public $school;

    public function mount(){
        $this->optionTeam=eloquent_to_options(School::whereNotNull('upload1')->whereNotNull('upload1')->get(),'id','name');
        $this->optionSport=eloquent_to_options(Sport::get());
        $this->data=form_model(Model::class,$this->dataId);
    }
    public function create(){
        $this->validate();
        $this->resetErrorBag();
        if ($this->data['date_match']==null){
            $this->data['date_match']=Carbon::now();
        }
        $this->data['key']=Str::slug(Sport::find($this->data['sport_id'])->title.'-'.$this->data['title']);
        Model::create($this->data);
        $this->emit('swal:alert', [
            'type' => 'success',
            'title' => 'Berhasil menambahkan data',
            'timeout' => 3000,
            'icon' => 'success'
        ]);
        $this->emit('redirect', route(  'match-making.index'));

    }

    public function update(){
        $this->validate();
        $this->resetErrorBag();
        if ($this->data['date_match']==null){
            $this->data['date_match']=Carbon::now();
        }
        $this->data['key']=Str::slug(Sport::find($this->data['sport_id'])->title.'-'.$this->data['title']);
        Model::find($this->dataId)->update($this->data);
        $this->emit('swal:alert', [
            'type' => 'success',
            'title' => 'Berhasil diubah',
            'timeout' => 3000,
            'icon' => 'success'
        ]);
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
