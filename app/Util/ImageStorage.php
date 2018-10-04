<?php

namespace App\Util;

use Storage;
use Illuminate\Support\Str;

class ImageStorage {

  public static function storeImage(\Intervention\Image\Image $img, String $disk) {
    $img = $img->encode('jpeg');
    $hash = Str::random(40);
    $filename = 'images/' . $hash . '.' . 'jpeg';
    Storage::disk($disk)->put($filename, $img);
    return $disk . '/' . $filename;
  }

}
