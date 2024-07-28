<?php

namespace App\Livewire;

use Livewire\Component;

class Map extends Component
{


    public function render()
    {

        $pins = [
            ['lat' => 37.17, 'lng' => 42.14, 'title' => 'Malkiyah', 'info' => 'Damascus Information'],
            ['lat' => 37.15, 'lng' => 41.22, 'title' => 'Qamishli', 'info' => 'Damascus Information'],
            ['lat' => 36.50, 'lng' => 40.73, 'title' => 'Hasaka', 'info' => 'Damascus Information'],
            ['lat' => 37.02, 'lng' => 41.60, 'title' => 'Qahtaniyah', 'info' => 'Damascus Information'],
            ['lat' => 36.20, 'lng' => 37.15, 'title' => 'Aleppo', 'info' => 'Damascus Information'],
            ['lat' => 33.50, 'lng' => 36.27, 'title' => 'Damascus', 'info' => 'Damascus Information'],
            ['lat' => 35.96, 'lng' => 38.03, 'title' => 'Maskana', 'info' => 'Damascus Information'],
            ['lat' => 34.31, 'lng' => 37.60, 'title' => 'Sadad', 'info' => 'Damascus Information'],
            ['lat' => 34.70, 'lng' => 37.45, 'title' => 'Fhelah', 'info' => 'Damascus Information'],
            ['lat' => 34.72, 'lng' => 36.77, 'title' => 'Zydal', 'info' => 'Damascus Information'],
            ['lat' => 34.35, 'lng' => 37.15, 'title' => 'Fairozah', 'info' => 'Damascus Information'],
            ['lat' => 34.71, 'lng' => 37.10, 'title' => 'Arman', 'info' => 'Damascus Information'],
            ['lat' => 34.35, 'lng' => 36.80, 'title' => 'Adawieh', 'info' => 'Damascus Information'],
            ['lat' => 34.73, 'lng' => 36.40, 'title' => 'Hamediah', 'info' => 'Damascus Information'],
            ];
        $mapBounds = ['top' => 37.2, 'bottom' => 32.0, 'left' => 35.8, 'right' => 42.8, 'width' => 500, 'height' => 500];

        // Convert pin coordinates to pixel positions
        $pins = array_map(function($pin) use ($mapBounds) {
            $coords = $this->convertCoordinates($pin['lat'], $pin['lng'], $mapBounds);
            return array_merge($pin, ['x' => $coords['x'], 'y' => $coords['y']]);
        }, $pins);

        return view('livewire.map', ['pins' => $pins]);
    }

    private function convertCoordinates($lat, $lng, $mapBounds)
    {
        $normalizedLat = ($lat - $mapBounds['bottom']) / ($mapBounds['top'] - $mapBounds['bottom']);
        $normalizedLng = ($lng - $mapBounds['left']) / ($mapBounds['right'] - $mapBounds['left']);

        $x = $normalizedLng * $mapBounds['width'];
        $y = (1 - $normalizedLat) * $mapBounds['height'];

        return ['x' => $x, 'y' => $y];
    }
}
