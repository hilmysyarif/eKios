<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function option()
    {
        return $this->belongsToMany('App\ProductOptionValues');
    }
}
