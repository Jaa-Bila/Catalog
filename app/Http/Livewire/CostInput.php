<?php

namespace App\Http\Livewire;
use App\Models\Image;
use App\Models\Cost;

use Livewire\Component;

class CostInput extends Component
{
    public $panjang ;
    public $lebar ;

    public function render()
    {
        $panjangCost = Cost::latest()->first();
        return view('livewire.cost-input')->with(compact('panjangCost',$panjangCost));
    }

    public function store()
    {
        $this->validate([
            'panjang' => 'required',
            'lebar' => 'required'
        ]);

        Cost::create([
            'panjang' => $this->panjang,
            'lebar' => $this->lebar
        ]);
        $this->resetInput();
    }

    private function resetInput()
    {
        $this->panjang = null;
        $this->lebar = null;
    }
}
