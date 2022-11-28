<?php

namespace App\Http\Livewire;

use App\Models\School;
use Livewire\Component;

class DashboardAdmin extends Component
{
    public $generalData;

    public function mount()
    {
        $this->generalData['clear'] = School::whereNotNull('upload1')
            ->whereNotNull('upload2')
            ->get();
        $this->generalData['spp'] = School::whereNotNull('upload1')->orderByDesc('updated_at')->get();
        $this->generalData['sp'] = School::whereNotNull('upload2')->orderByDesc('updated_at')->get();
    }

    public function render()
    {
        return view('livewire.dashboard-admin');
    }
}
