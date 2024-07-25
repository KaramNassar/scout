<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Gallery extends Component
{
    public $images = [];

    public function mount()
    {
        $files = Storage::files('public/images');
        foreach ($files as $file) {
            $this->images[] = Storage::url($file);
        }

    }

    public function render()
    {
        return view('livewire.gallery');
    }
}
