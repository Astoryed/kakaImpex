<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $fillable = [
        'order_id','customer_id','name','company','address','country','phone','cellNo', 'email','comments',
    ];

    public function users(){

        return $this->belongsTo('App\User');
    }

    public function orders(){

        return $this->hasOne('App\Order');
    }
}
