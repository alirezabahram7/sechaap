<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'user_name',
        'phone',
        'product_id',
        'numbers',
        'price',
        'order_status_id',
        'tracking_code',
        'address',
        'description'
    ];

    public function banner()
    {
        return $this->hasOne(Banner::class);
    }

    public function announcement()
    {
        return $this->hasOne(Announcement::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function status()
    {
        return $this->belongsTo(OrderStatus::class, 'order_status_id');
    }
}
