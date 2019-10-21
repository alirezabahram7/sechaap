<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = ['order_id','form','to'];

    public function order(){

        return $this->belongsTo(Order::class);
    }
}
