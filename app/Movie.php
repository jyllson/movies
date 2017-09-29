<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['title', 'genre', 'director', 'year', 'storyline'];

    const STORE_RULES = [
    	'title' => 'required | string | min: 5',
    	'genre' => 'required | min: 5',
    	'director' => 'required | min: 5',
    	'year' => 'required | min: 4',
    	'storyline' => 'required | min: 15'
    ];

    
}
