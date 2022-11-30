<?php

namespace App\Http\Livewire;

use App\Models\MatchMaking;
use Livewire\Component;

class MatchMakingUpdateScore extends Component
{
    public $match;
    public $score1;
    public $score2;
    public $color;
    public $background;
    public $updateAble=0;
    public $school;

    public function mount(){
        $this->score1=$this->match->score1;
        $this->score2=$this->match->score2;
        $this->changeColor();
    }
    public function changeColor(){
        if ($this->match->score1>$this->match->score2){
            $this->background='linear-gradient(90deg, #47b84b 50%, #d51f25 50%)';
            $this->color='white';
        }elseif ($this->match->score1<$this->match->score2){
            $this->background='linear-gradient(90deg, #d51f25 50%, #47b84b 50%)';
            $this->color='white';
        }else{
            $this->background='#FFFFFF';
            $this->color='black';
        }
    }
    protected function getRules()
    {
        return [
            'score1'=>'numeric',
            'score2'=>'numeric',
        ];
    }

    public function updateScore(){
        $this->validate();
        if ($this->score1==null){
            $this->score1=0;
        }
        if ($this->score2==null){
            $this->score2=0;
        }
        $this->match->update(['score1'=>$this->score1,'score2'=>$this->score2,'update_score'=>1]);
        $this->match=MatchMaking::find($this->match->id);
        $this->updateAble=0;
        $this->changeColor();
        $this->emit('swal:alert', [
            'type' => 'success',
            'title' => 'Berhasil mengubah score',
            'timeout' => 3000,
            'icon' => 'success'
        ]);
    }
    public function setUpdateAble(){
        $this->updateAble=1;
    }
    public function render()
    {
        return view('livewire.match-making-update-score');
    }
}
