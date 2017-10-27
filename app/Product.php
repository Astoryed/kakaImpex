<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'category', 'price', 'details', 'photo_id', 'role_id'
];

    public function photo(){

        return $this->belongsTo('App\Photo');
    }


    public function role(){

        return $this->belongsTo('App\Role');
    }
}
