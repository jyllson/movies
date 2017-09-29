<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GenresController extends Controller
{
    public function index($genre){
    	$movies = DB::table('movies')->where('genre', '=', $genre)->get();
    	return view('movies', compact('movies', 'genre'));
    }
}
