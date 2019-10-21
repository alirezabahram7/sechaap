<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'product_id', 'description'];

    public function banner()
    {
        return $this->hasOne(Banner::class);
    }

    public function announcement()
    {
        return $this->hasOne(Announcement::class);
    }

    public function product() {
        return $this->belongsTo(Product::class);
    }

    public function type() {
        return $this->hasOneThrough(Type::class,Product::class);
    }
}
