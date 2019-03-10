<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function item() {
        return $this->belongsTo('App\item');
    }
}
