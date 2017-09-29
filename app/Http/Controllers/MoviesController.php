<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

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
    	$request->validate(Movie::STORE_RULES);
    	$movie = Movie::create($request->all());
    	return redirect()->route('all-movies');
    }

    public function create(){
    	return view('create');
    }
}
