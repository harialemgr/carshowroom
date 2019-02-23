<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function gallery_category(){
        return $this->belongsTo('App\GalleryCategory');
    }
}
