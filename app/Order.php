<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'id','customer_id', 'customer_name', 'customer_email', 'cart',
    ];


    public function users(){

        return $this->belongsTo('App\User');
    }

    public function inquiries(){

        return $this->belongsTo('App\Inquiry');
    }
}
