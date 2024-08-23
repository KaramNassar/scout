<?php

namespace App\Http\Controllers;

use App\Models\Troop;
use Joaopaulolndev\FilamentGeneralSettings\Models\GeneralSetting;

class TroopController extends Controller
{
    public function index()
    {
        $troops = Troop::all();

        \seo()
            ->title(__('Syrian Syrian Scout') . ': ' . __('Troops'), '')
            ->description(__('Syrian Syrian Scout') . ': ' . __('Troops'), '')
            ->images(
                asset('storage/' . GeneralSetting::first()->hero_image)
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

        \seo()
            ->title(__('Syrian Syrian Scout').': '.$troop->title, '')
            ->description(strip_tags(substr($troop->description, 0, 156)).'...', '')
            ->images($image);


        return view('troops.show', [
            'troops' => $troops->filter(
                fn($troop) => $troop->slug !== $slug
            ),
            'troop'  => $troop
        ]);
    }
}
