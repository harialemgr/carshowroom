<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class blog extends Model
{
	 
    public function blog_category()
    {
    	return $this->belongsTo('App\blog_category');
    }

    public function postImage()
    {
    	return $this->hasMany('App\postImage');
    }

    use Sluggable;
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }



}