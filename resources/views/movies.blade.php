@extends('layout.blog')

@section('movie')
	@foreach($movies as $movie)
		<div class="row">
        	<div class="col-md-7">
          		<a href="#">
            		<img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
          		</a>
        	</div>
        	<div class="col-md-5">
				<h3>{{ $movie->title }}</h3>
	        	<p>{{ $movie->storyline }}</p>
	        	<a class="btn btn-primary" href="/movie/{{ $movie->id }}">View Movie</a>
	        </div>
		</div>
		<br>
	@endforeach
@endsection

@section('title')
	Movies
@endsection