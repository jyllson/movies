<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Movie extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['title', 'genre', 'director', 'year', 'storyline'];


    const STORE_RULES = [
    	'title' => 'required',
    	'genre' => 'required',
    	'year' => 'required | integer | between: 1900,year',
    	'storyline' => 'required | max: 1000'
    ];

    public function comments(){
    	return $this->hasMany(Comment::class);
    }

    
}
