<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Storage;

class Statement extends Model
{
    protected $fillable = ['title', 'subtitle', 'img', 'localimg'];

    public function delete()
    {
      if(Storage::exists($this->localimg)) {
        Storage::delete($this->localimg);
      }
      parent::delete();
    }

}
