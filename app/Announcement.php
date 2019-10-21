<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $fillable = ['order_id', 'pre', 'name', 'date', 'time_from', 'time_to', 'place', 'address', 'from'];

    public function order(){

        return $this->belongsTo(Order::class);
    }
}
