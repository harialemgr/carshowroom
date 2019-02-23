<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GalleryCategory extends Model
{
    public function gallery(){
        return $this->hasMany('App\Gallery');
    }
    public function video(){
        return $this->hasMany('App\Video');
    }
}
