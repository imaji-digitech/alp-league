<?php

namespace App\Http\Livewire;

use App\Models\School;
use Livewire\Component;

class DashboardAdmin extends Component
{
    public $generalData;
    public $dataDistrict;

    public function mount()
    {
        $this->dataDistrict =
            School::query()
                ->selectRaw('village')
                ->selectRaw('count(students.id) as count')
                ->join('students','students.school_id','schools.id')
                ->groupBy('village')->get();
        foreach ($this->dataDistrict as $data){
            $data->school =School::where('village','=',$data->village)->get()->count();
        }
//        dd($this->dataDistrict);
        $this->generalData['clear'] = School::whereNotNull('upload1')
            ->whereNotNull('upload2')
            ->get();
        $this->generalData['spp'] = School::whereNotNull('upload1')->orWhereNotNull('upload2')
            ->orderBy('updated_at')->get();
    }

    public function render()
    {
        return view('livewire.dashboard-admin');
    }
}
