<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $guarded=[];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function additions()
    {
        return $this->hasMany(Addition::class);
    }

    public function additionTypes(){
        return $this->hasManyThrough(AdditionType::class, Addition::class,'type_id','id','id','addition_type_id');
    }
}
