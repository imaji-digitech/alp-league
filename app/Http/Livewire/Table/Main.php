<?php

namespace App\Http\Livewire\Table;

use App\Models\Driver;
use App\Models\GoodReceipt;
use App\Models\Invoice;
use App\Models\MatchMaking;
use App\Models\Material;
use App\Models\MaterialMutation;
use App\Models\Receipt;
use App\Models\Report;
use App\Models\School;
use App\Models\Sport;
use App\Models\Student;
use App\Models\TravelPermit;
use Livewire\Component;
use Livewire\WithPagination;

class Main extends Component
{
    use WithPagination;

    public $model;
    public $name;
    public $modelId;
    public $dataId;
    public $data;

    public $perPage = 10;
    public $sortField = "id";
    public $sortAsc = false;
    public $search = '';
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ["deleteItem" => "delete_item", 'delete' => 'delete'];

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }

    public function deleteItem($id)
    {
        $this->data = $this->model::find($id);

        if (!$this->data) {
            $this->emit("deleteResult", ["status" => false, "message" => "Gagal menghapus data " . $this->name]);
            return;
        }
        $this->emit('swal:confirm', [
            'icon' => 'warning',
            'title' => 'apakah anda yakin ingin menghapus data ini',
            'confirmText' => 'Hapus',
            'method' => 'delete'
        ]);

    }

    public function delete()
    {
        $this->data->delete();
        $this->emit('swal:alert', [
            'icon' => 'success',
            'title' => 'Berhasil menghapus data',
        ]);
    }

    public function render()
    {
        $data = $this->get_pagination_data();
        return view($data['view'], $data);
    }

    public function get_pagination_data()
    {
        switch ($this->name) {
            case 'school':
                $data = School::search($this->search)->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')->paginate($this->perPage);
                return ["view" => 'livewire.table.school', "datas" => $data,];
                break;
            case 'sport':
                $data = Sport::query()->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')->paginate($this->perPage);
                return ["view" => 'livewire.table.sport', "datas" => $data,];
                break;
            case 'schoolDetail':
                $data = Student::searchSchool($this->search, $this->dataId)->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')->paginate($this->perPage);
                return ["view" => 'livewire.table.student', "datas" => $data,];
                break;
            case 'sportDetail':
                $data = Sport::query()->whereSportId($this->dataId)->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')->paginate($this->perPage);
                return ["view" => 'livewire.table.school', "datas" => $data,];
                break;
            case 'student':
                $data = Student::search($this->search)->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')->paginate($this->perPage);
                return ["view" => 'livewire.table.student', "datas" => $data,];
                break;
            case 'studentAll':
                $data = Student::searchAll($this->search)->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')->paginate($this->perPage);
                return ["view" => 'livewire.table.studentAll', "datas" => $data,];
                break;
            case 'match-making':
                $data = MatchMaking::search($this->search)->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')->paginate($this->perPage);
                return ["view" => 'livewire.table.match-making', "datas" => $data,];
                break;


            default:
                # code...
                break;
        }
    }
}
