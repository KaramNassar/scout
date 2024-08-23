<?php

namespace App\Http\Controllers;

use App\Models\Troop;
use Illuminate\Support\Str;
use Joaopaulolndev\FilamentGeneralSettings\Models\GeneralSetting;

use function seo;

class TroopController extends Controller
{
    public function index()
    {
        $troops = Troop::all();

        seo()
            ->title(__('Syrian Syrian Scout').': '.__('Troops'), '')
            ->description(__('Syrian Syrian Scout').': '.__('Troops'), '')
            ->images(
                asset('storage/'.GeneralSetting::first()->hero_image)
            );

        return view('troops.index', [
            'troops' => $troops
        ]);
    }

    public function show(string $slug)
    {
        $troops = Troop::all();

        $troop = $troops->where('slug', $slug)->first();

        $image = isset($troop->featuredImage) ? asset('storage/'.$troop->featuredImage->url) : asset(
            'storage/'.GeneralSetting::first()->hero_image
        );

        seo()
            ->title(__('Syrian Syrian Scout').': '.$troop->title, '')
            ->description(Str::of($troop->description)->substr(0, 155)->stripTags().'...', '')
            ->images($image);


        return view('troops.show', [
            'troops' => $troops->filter(
                fn($troop) => $troop->slug !== $slug
            ),
            'troop'  => $troop
        ]);
    }
}
