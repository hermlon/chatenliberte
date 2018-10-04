<?php

namespace App\Util;

use Storage;

class ImageStorage {

  public static function storeImage(\Intervention\Image\Image $img, String $disk) {
    $img = $img->encode('jpeg');
    $hash = Str::random(40);
    $filename = 'images/' . $hash . '.' . 'jpeg';
    Storage::disk($disk)->put($filename, $img);
    return Storage::url($filename);
  }

}
