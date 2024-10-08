<?php

namespace App\Helpers;

use App\Models\Page;
use App\Models\Post;
use App\Models\Troop;
use Carbon\Carbon;

class SeoSiteMap
{
    /**
     * Array of the all the items in the sitemap
     */
    private array $items = [];

    /**
     * Should the sitemap have the last_mod var?
     *
     * @var bool
     */
    private mixed $use_last_mod = true;

    /**
     * Construct the sitemap class
     *
     * @return void
     */
    public function __construct($use_last_mod = true)
    {
        $this->use_last_mod = $use_last_mod;

        $sitemap_models = [
            Post::class,
            Page::class,
            Troop::class
        ];
        $this->attachModelItems($sitemap_models);
    }

    /**
     * Attach the model items
     */
    private function attachModelItems(array $sitemap_models = []): void
    {
        foreach ($sitemap_models as $sitemap_model) {
            $items = $sitemap_model::getSitemapItems();

            if ($items && $items->count() > 0) {
                foreach (['en', 'ar'] as $locale) {
                    $this->items = array_merge($this->items, $items->map(function ($item) use($locale) {
                        return (object) [
                            'url' => str_replace('locale', $locale, $item->getSitemapItemUrl()),
                            'last_mod' => $item->getSitemapItemLastModified(),
                        ];
                    })->toArray());
                }

            }
        }
    }

    /**
     * Attach a custom sitemap item
     *
     * @param  string  $path    Path on the current site
     * @param  string|null  $last_mod Date of last edit
     * @return SeoSiteMap
     */
    public function attachCustom(string $path, ?string $last_mod = null): static
    {
        $this->items[] = (object) [
            'url' => url($path),
            'last_mod' => $last_mod,
        ];

        return $this;
    }

    /**
     * Return sitemap items as array
     */
    public function toArray(): array
    {
        return $this->items;
    }

    /**
     * Return xml for sitemap items
     */
    public function toXml(): string
    {
        $xml = '<?xml version="1.0" encoding="UTF-8"?>'.
            '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
        $last_mod = Carbon::now()->format('Y-m-d H:i:s');

        foreach ($this->items as $item) {
            $use_last_mod = $this->use_last_mod ? ($item->last_mod ?? $last_mod) : null;
            $xml .= '<url>'.
                '<loc>'.(str_starts_with($item->url, '/') ? url($item->url) : $item->url).'</loc>'.
                ($use_last_mod ? '<lastmod>'.$use_last_mod.'</lastmod>' : '').
                '</url>';

            if ($item->last_mod) {
                $last_mod = $item->last_mod;
            }
        }
        $xml .= '</urlset>';

        return $xml;
    }
}
