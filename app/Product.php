<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function image()
    {
        return $this->belongsTo('App\File');
    }

    public function file()
    {
        return $this->belongsTo('App\File');
    }
}