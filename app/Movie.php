<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $title;
    protected $genre;
    protected $director;
    protected $year;
    protected $storyline;
}
