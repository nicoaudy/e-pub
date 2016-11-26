<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function image()
    {
        return $this->belongsTo('App\File');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function file()
    {
        return $this->belongsTo('App\File');
    }
}