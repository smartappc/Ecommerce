<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function city() {
        return $this->belongsTo('App\City');
    }

    public function images() {
        return $this->hasMany('App\Image');
    }
}
