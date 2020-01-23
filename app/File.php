<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = ["name"];

    public function order(){
        return $this->belongsTo(Order::class);
    }
}
