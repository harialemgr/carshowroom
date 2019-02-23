<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'member_category_id', 'designation', 'name', 'address', 'phone', 'email', 'image', 'nature_of_appointment', 'qualification'
    ];

    public function member_category()
    {
        return $this->belongsTo('App\MemberCategory');
    }
}
