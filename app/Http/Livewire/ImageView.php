<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Image;
use App\Models\Cost;

class ImageView extends Component
{
    public $limitPerPage = 9;

    public $panjang ;
    public $lebar ;

    public $listeners = [
        'post-data' => 'postData'
    ];

    public function postData()
    {
        $this->limitPerPage = $this->limitPerPage + 3;
    }

    public function render()
    {
        $panjangCost = Cost::latest()->first();
        $images = Image::latest()->paginate(20);
        return view('livewire.image-view')->with(compact('images', 'panjangCost'));
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
