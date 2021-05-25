<?php

if(! function_exists('url_mix')) {

    function url_mix($path)
    {
        return url(mix($path));
    }
}

if(! function_exists('cropper')) {

    /**
     * @param string $imagePath
     * @param int $width
     * @param int|null $height
     * @return mixed
     */
    function cropper(string $imagePath, int $width, int $height = null)
    {
        //retorna o path da imagem ajustada no dir de cache
        return \Storage::url(
            \App\Support\Cropper::thumb($imagePath, $width, $height)
        );
    }
}