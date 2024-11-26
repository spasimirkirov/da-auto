<?php

namespace App\Traits;

trait SlugTrait
{
    public static function slugId(string $slug): int
    {
        return self::where('slug', '=', $slug)
            ->value('id');
    }

    public static function slugName(string $slug)
    {
        return self::where('slug', '=', $slug)
            ->value('name');
    }
}
