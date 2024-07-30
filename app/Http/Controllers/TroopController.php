<?php

namespace App\Http\Controllers;

use App\Models\Troop;

class TroopController extends Controller
{
    public function index()
    {
        $troops = Troop::all();

        return view('troops.index', [
            'troops' => $troops
        ]);
    }

    public function show(string $slug)
    {
        $troops = Troop::all();

        $troop = $troops->where('slug', $slug)->first();


        return view('troops.show', [
            'troops' => $troops->filter(
                fn($troop) => $troop->slug !== $slug
            ),
            'troop'  => $troop
        ]);
    }
}
