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

@section('comments')
	@if(count($movie->comments))
		@foreach($movie->comments as $comment)
	        <div class="media mb-4">
	            <img class="d-flex mr-3 rounded-circle" src="http://www.propertyguru.com.sg/sf2-news/bundles/gurucmsnews/img/agentsilhouette-50x50.png" alt="">
	            <div class="media-body">
	              <h5 class="mt-0">{{ $comment->author }}</h5>
	              {{ $comment->text }}
	            </div>
	        </div>
        @endforeach
    @endif
@endsection

@section('add-comment')
	<h4>Add a comment</h4>
    <form method="POST" action="{{ route('comments-movie', ['movie_id' => $movie->id]) }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="author">Your name:</label>
            <input type="text" class="form-control" id="author" name="author"/>
            @include('partials.error-message', ['fieldTitle' => 'author'])
        </div>
        <div class="form-group">
            <label for="text">Comment:</label>
            <textarea class="form-control" id="text" name="text"></textarea>
            @include('partials.error-message', ['fieldTitle' => 'text'])
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection