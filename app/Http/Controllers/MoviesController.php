<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use Carbon\Carbon;

class MoviesController extends Controller
{
    public function index(){
    	$movies = Movie::all();
    	return view('movies', compact('movies'));
    }

    public function show($id){
    	$movie = Movie::find($id);
    	return view('single-movie', compact('movie'));
    }

    public function store(Request $request){
        $now = new Carbon();
        $year = $now->year;
        $rules = Movie::STORE_RULES;
        $rules['year'] = str_replace('year', $year, $rules['year']);

    	$request->validate($rules);
    	$movie = Movie::create($request->all());
    	return redirect()->route('all-movies');
    }

    public function create(){
    	return view('create');
    }
}
