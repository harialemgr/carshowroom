<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public function gallery_category(){
        return $this->belongsTo('App\GalleryCategory');
    }
}
