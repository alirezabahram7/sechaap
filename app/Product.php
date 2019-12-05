<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded=['photo'];

    public function type() {
        return $this->belongsTo(Type::class);
    }

    public function orders() {
        return $this->hasMany(Order::class);
    }
}
