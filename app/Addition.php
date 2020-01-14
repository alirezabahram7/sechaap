<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addition extends Model
{
    protected $guarded = [];

    public function additionType(){
        return $this->belongsTo(AdditionType::class);
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }
}
