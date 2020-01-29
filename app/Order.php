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
        'type_id',
        'numbers',
        'price',
        'order_status_id',
        'tracking_code',
        'address',
        'description'
    ];

    public function files(){
        return $this->hasMany(File::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
   public function type()
    {
        return $this->belongsTo( Type::class);
    }

    public function status()
    {
        return $this->belongsTo(OrderStatus::class, 'order_status_id');
    }

    public function additions(){
        return $this->belongsToMany(Addition::class);
    }
}
