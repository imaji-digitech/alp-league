<?php

namespace App\Http\Livewire;


use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class DashboardData extends Component
{
    public $generalData;

    public function mount()
    {
        $this->generalData['student'] = Student::whereSchoolId(auth()->user()->school_id)->get()->count();
        $this->generalData['studentAll'] = Student::get()->count();
    }



    public function render()
    {
        return view('livewire.dashboard-data');
    }
}
