<?php

namespace App\Traits;

trait SeoSiteMapTrait
{
    abstract public function getSitemapItemUrl(): string;

    public function getSitemapItemLastModified()
    {
        if (isset($this->updated_at) || isset($this->created_at)) {
            return $this->updated_at ?? $this->created_at;
        }

        return null;
    }

    abstract public static function getSitemapItems();
}
