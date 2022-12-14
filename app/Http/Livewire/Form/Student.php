<?php

namespace App\Http\Livewire\Form;

use App\Models\Sport;
use App\Models\Student as Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Livewire\Component;
use Livewire\WithFileUploads;

class Student extends Component
{
    use WithFileUploads;
    public $action;
    public $data;
    public $dataId;
    public $optionSport;
    public $thumbnail;

    public function mount()
    {
        $this->data = form_model(Model::class, $this->dataId);
        $this->optionSport = eloquent_to_options(Sport::get());
        $this->data['school_id'] = auth()->user()->school_id;
    }

    public function update()
    {
        $this->validate();
        $this->resetErrorBag();
        if ($this->thumbnail != null) {
            $image = $this->thumbnail;
            $filename = Str::slug($this->data['nisn']) . '-' . $this->data['name'] . '-' . rand(0, 1000) . '.' . $image->getClientOriginalExtension();
            $this->data['report'] = 'report/' . $filename;

            $image = Image::make($image)->resize(1080, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image->stream();

            Storage::disk('local')->put('public/report/' . $filename, $image, 'public');
        }
        Model::find($this->dataId)->update($this->data);
        $this->emit('swal:alert', [
            'type' => 'success',
            'title' => 'Data berhasil diubah',
            'timeout' => 3000,
            'icon' => 'success'
        ]);
        $this->emit('redirect', route('student.index'));
    }

    public function create()
    {
        $this->validate();
        $this->resetErrorBag();
        $image = $this->thumbnail;
        $filename = Str::slug($this->data['nisn']) . '-' . $this->data['name'] . '-' . rand(0, 1000) . '.' . $image->getClientOriginalExtension();
        $this->data['report'] = 'report/' . $filename;

        $image = Image::make($image)->resize(1080, null, function ($constraint) {
            $constraint->aspectRatio();
        });
        $image->stream();

        Storage::disk('local')->put('public/report/' . $filename, $image, 'public');
        Model::create($this->data);
        $this->emit('swal:alert', [
            'type' => 'success',
            'title' => 'Data berhasil ditambahkan',
            'timeout' => 3000,
            'icon' => 'success'
        ]);
        $this->emit('redirect', route('student.index'));
    }

    public function render()
    {
        return view('livewire.form.student');
    }

    protected function getRules()
    {
        if ($this->action == 'create') {
            return [
                'data.sport_id' => 'required',
                'data.school_id' => 'required',
                'data.name' => 'required|max:255',
                'data.nisn' => 'required|max:255',
                'data.place_birth' => 'required|max:255',
                'data.date_birth' => 'required',
                'data.mother_name' => 'required|max:255',
                'thumbnail' => 'required'
            ];
        } else {
            return [
                'data.sport_id' => 'required',
                'data.school_id' => 'required',
                'data.name' => 'required|max:255',
                'data.nisn' => 'required|max:255',
                'data.place_birth' => 'required|max:255',
                'data.date_birth' => 'required',
                'data.mother_name' => 'required|max:255',
            ];
        }
    }
}
