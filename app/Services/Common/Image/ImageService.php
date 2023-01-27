<?php

namespace App\Services\Common\Image;

use Intervention\Image\Facades\Image;

class ImageService
{
    public static function saveWithThumb($path, $image): \Intervention\Image\Image
    {
        $name = \Str::uuid();
        $image_format = $image->extension();
        $imageRealPath = $image->getRealPath();
        $image->getClientOriginalName();

        // create image use Image Intervention package
        $img = Image::make($imageRealPath)->encode($image_format, 100);

        $img_thumb = Image::make($imageRealPath)->encode($image_format, 100);

        // resize thumb image to width and aspect radio
        $img_thumb->fit(656, 400);

        if (!\File::exists($path)) {
            \File::makeDirectory($path, 0777, true);
        }

        $img_thumb->save($path . DIRECTORY_SEPARATOR . 'thumb-' . $name . '.' . $image_format, 60);

        return $img->save($path . DIRECTORY_SEPARATOR . $name . '.' . $image_format, 60);
    }
}
