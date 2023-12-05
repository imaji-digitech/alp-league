<?php

namespace App\Http\Livewire\Form;

use App\Models\Certificate as Model;
use App\Models\School;
use App\Models\Sport;
use Livewire\Component;

class Certificate extends Component
{
    public $action;
    public $optionSchool;
    public $optionSport;
    public $data;
    public $dataId;
    public function mount(){
        $this->optionSchool=eloquent_to_options(School::whereNotNull('upload1')->whereNotNull('upload1')->get(),'id','name');
        $this->optionSport=eloquent_to_options(Sport::get());
        $this->data=form_model(Model::class,$this->dataId);
    }

    public function create(){
        $c= Model::create($this->data);
        if ($this->data['sport_id']==null){
            $school=\App\Models\Student::
                whereSchoolId($this->data['school_id'])
                ->get();
        }else{
            $school=\App\Models\Student::whereSportId($this->data['sport_id'])
                ->whereSchoolId($this->data['school_id'])
                ->get();
        }
        foreach ($school as $a){

//            13.060.B/IX/2023
            $count=\App\Models\CertificateDetail::get()->count()+61;
            \App\Models\CertificateDetail::create(['student_id'=>$a->id, 'certificate_id'=>$c->id,'number'=>"13.$count.A/XI/2023",]);
        }
        $this->emit('swal:alert', [
            'type' => 'success',
            'title' => 'Berhasil diubah',
            'timeout' => 3000,
            'icon' => 'success'
        ]);
        $this->data['school_id']=null;
    }

    public function render()
    {
        return view('livewire.form.certificate');
    }
}
