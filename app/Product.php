<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'category', 'price', 'details', 'photo_id'
];

    public function photo(){

        return $this->belongsTo('App\Photo');
    }

}
