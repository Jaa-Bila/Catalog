<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Image;

class MultipleImageUpload extends Component
{
    use WithFileUploads;

    public $images = [];

    public function save()
    {
        $this->validate([
            'images.*' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048', // 1MB Max
        ]);

        foreach ($this->images as $image) {
            $name = md5($image . microtime()).'.'.$image->extension();
            $image->storeAs('public/images', $name);
            Image::create(['image' => $name]);
        }

        session()->flash('success', 'Images has been successfully Uploaded.');
        return redirect()->back();
    }
    public function render()
    {
        return view('livewire.multiple-image-upload');
    }
}
