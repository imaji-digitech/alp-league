<?php

namespace App\Http\Livewire\Form;

use App\Models\School;
use Livewire\Component;

class User extends Component
{
    public $action;
    public $data;
    public $dataId;

    public function mount()
    {
        $this->data = [
            'name' => '',
            'email' => '',
            'village' => '',
            'password' => '',
            'password_confirmation' => '',
        ];
        if ($this->dataId) {
            $data = \App\Models\User::find($this->dataId);
            $this->data = [
                'name' => $data['name'],
                'email' => $data['name'],
                'village' => $data->school->village,
                'password' => '',
                'password_confirmation' => '',
            ];
        }

    }

    public function render()
    {
        return view('livewire.form.user');
    }

    public function create()
    {
        $this->validate();
        if ($this->data['password'] != "") {
            $this->emit('swal:alert', [
                'type' => 'error',
                'title' => 'Password tidak boleh kosong',
                'timeout' => 3000,
                'icon' => 'success'
            ]);
        }
        if ($this->data['password'] != $this->data['password_confirmation']) {
            $this->emit('swal:alert', [
                'type' => 'error',
                'title' => 'Password & Konfirmasi Password harus sama',
                'timeout' => 3000,
                'icon' => 'success'
            ]);
        }
        $school = School::create([
            'village' => $this->data['village'],
            'name' => $this->data['name'],
        ]);
        \App\Models\User::create([
            'name' => $this->data['name'],
            'email' => $this->data['email'],
            'password' => bcrypt($this->data['password']),
            'school_id' => $school->id
        ]);

        $this->emit('swal:alert', [
            'type' => 'success',
            'title' => 'Data berhasil ditambahkan',
            'timeout' => 3000,
            'icon' => 'success'
        ]);
        $this->emit('redirect', route('users.index'));
    }

    public function update()
    {
        $this->validate();
        if ($this->data['password'] != "") {
            $this->emit('swal:alert', [
                'type' => 'error',
                'title' => 'Password tidak boleh kosong',
                'timeout' => 3000,
                'icon' => 'success'
            ]);
        }
        if ($this->data['password'] != '') {
            if ($this->data['password'] != $this->data['password_confirmation']) {
                $this->emit('swal:alert', [
                    'type' => 'error',
                    'title' => 'Password & Konfirmasi Password harus sama',
                    'timeout' => 3000,
                    'icon' => 'success'
                ]);
            }
        }

        $user = \App\Models\User::find($this->dataId);

        $school = School::find($user->school_id)->update([
            'village' => $this->data['village'],
            'name' => $this->data['name'],
        ]);
        $user->update([
            'name' => $this->data['name'],
            'email' => $this->data['email'],
        ]);
        if ($this->data['password'] != '') {
            $user->update([
                'password' => $this->data['password'],
            ]);
        }

        $this->emit('swal:alert', [
            'type' => 'success',
            'title' => 'Data berhasil ditambahkan',
            'timeout' => 3000,
            'icon' => 'success'
        ]);
        $this->emit('redirect', route('users.index'));
    }

    protected function getRules()
    {
        return [
            'data.name' => 'required|max:255',
            'data.email' => 'required|max:255',
            'data.village' => 'required|max:255',
        ];
    }
}
