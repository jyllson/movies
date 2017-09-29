@extends('layout.single-post')

@section('title')
	{{ $movie->title }}
@endsection

@section('created')
	{{ $movie->created_at }}
@endsection

@section('storyline')
	{{ $movie->storyline }}
@endsection

@section('by')
	{{ $movie->director }}
@endsection

@section('genre')
	{{ $movie->genre }}
@endsection

@section('year')
	{{ $movie->year }}
@endsection