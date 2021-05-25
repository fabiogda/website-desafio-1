<?php

namespace App\Support;

Class Cropper
{
    public static function thumb(string $imagePath, int $width, int $height = null)
    {
        $cropper = new \CoffeeCode\Cropper\Cropper('../public/storage/cache');
        $pathThumb = $cropper->make(config('filesystems.disks.public.root') . '/'. $imagePath, $width, $height);
        return $pathThumb;
    }
}