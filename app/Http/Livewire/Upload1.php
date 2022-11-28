<?php

namespace App\Http\Livewire;

use App\Models\School;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Livewire\Component;
use Livewire\WithFileUploads;

class Upload1 extends Component
{
    use WithFileUploads;

    public $upload;

    protected $messages = [
        'upload.required' => 'Mohon upload terlebih dahulu',
        'upload.mimes' => 'Mohon upload dengan format yang sesuai(png,jpeg,jpg)',
    ];
    protected $rules = [
        'upload' => 'required|mimes:png,jpg,jpeg',
    ];


    public function upload()
    {
        $this->validate();
        $this->resetErrorBag();
        $image = $this->upload;
        $filename = Str::slug(auth()->user()->school->village . '-' . auth()->user()->school->name)
            . '-' . rand(0, 1000)
            . '.' . $image->getClientOriginalExtension();
        $school = School::find(auth()->user()->school_id);
        $u1 = 'surat-pernyataan-dan-pendaftaran/' . $filename;

        $image = Image::make($image)->resize(1080, null, function ($constraint) {
            $constraint->aspectRatio();
        });
        $image->stream();
        Storage::disk('local')->put('public/surat-pernyataan-dan-pendaftaran//' . $filename, $image, 'public');
        $school->update(['upload1' => $u1]);
        $this->emit('swal:alert', [
            'type' => 'success',
            'title' => 'Berhasil melakukan upload surat pernyataan dan pendaftaran',
            'timeout' => 3000,
            'icon' => 'success'
        ]);
    }

    public function render()
    {
        return view('livewire.upload1');
    }
}
