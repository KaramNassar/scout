<?php

namespace App\Livewire;

use App\Models\Troop;
use Illuminate\View\View;
use Livewire\Component;

class Map extends Component
{

    public function render(): View
    {
        $troops = Troop::get(['id', 'name', 'slug', 'lat', 'lng', 'featured_image_id']);

        $mapBounds = [
            'top'    => 37.2,
            'bottom' => 32.0,
            'left'   => 35.8,
            'right'  => 42.8,
            'width'  => 500,
            'height' => 500
        ];

        $troops = $troops->map(function ($pin) use ($mapBounds) {
            $coords = $this->convertCoordinates($pin->lat, $pin->lng, $mapBounds);
            $pin->x = $coords['x'];
            $pin->y = $coords['y'];
            return $pin;
        });

        return view('livewire.map', ['troops' => $troops]);
    }

    private function convertCoordinates($lat, $lng, $mapBounds): array
    {
        $normalizedLat = ($lat - $mapBounds['bottom']) / ($mapBounds['top'] - $mapBounds['bottom']);
        $normalizedLng = ($lng - $mapBounds['left']) / ($mapBounds['right'] - $mapBounds['left']);

        $x = $normalizedLng * $mapBounds['width'];
        $y = (1 - $normalizedLat) * $mapBounds['height'];

        return ['x' => $x, 'y' => $y];
    }
}
