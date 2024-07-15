<?php

namespace App\Livewire;

use Livewire\Component;

class Map extends Component
{
    public $troops;

    public function mount()
    {
        $this->troops = [
            ['name' => '', 'lat' => 0, 'lng' => 0, 'img' => '', 'link' => ''],
            ['name' => 'The Fourth Musical Scout Troop in Al-Hasakah', 'lat' => 36.4936, 'lng' => 40.7540, 'img' => asset('storage/images/1.jpg'), 'link' => '<a href="#">Read more</a>'],
            ['name' => 'The Fourth Scout Troop in Qamishli', 'lat' => 37.0531, 'lng' => 41.2228, 'img' => asset('storage/images/2.jpg'), 'link' => '<a href="#">Read more</a>'],
            ['name' => 'Mar Ephrem the Syrian Scouts in Aleppo', 'lat' => 36.2021, 'lng' => 37.1343, 'img' => asset('storage/images/3.jpg'), 'link' => '<a href="#">Read more</a>'],
            ['name' => 'The Patriarchal Mar Ephrem the Syrian Troop', 'lat' => 33.5138, 'lng' => 36.2765, 'img' => asset('storage/images/4.jpg'), 'link' => '<a href="#">Read more</a>'],
        ];




    }

    public function render()
    {
        return view('livewire.map');
    }
}
