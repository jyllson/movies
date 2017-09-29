<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = ['id'];

    const STORE_RULES = [
    	'author' => 'required | string | max: 20',
    	'text' => 'required | min: 15'
    ];

    public function movie(){
    	return $this->belongsTo(Movie::class);
    }
}
