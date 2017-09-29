@extends('layout.blog')

@section('title')
	Insert new movie
@endsection

@section('create')
<h2 class="blog-post-title">Insert new movie</h2>
    <form method="POST" action="{{ route('store-movie') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title"/>
            @include('partials.error-message', 
            ['fieldTitle' => 'title'])
        </div>
        <div class="form-group">
            <label for="title">Genre</label>
            <input type="text" class="form-control" id="genre" name="genre"/>
            @include('partials.error-message', 
            ['fieldTitle' => 'genre'])
        </div>
        <div class="form-group">
            <label for="title">Director</label>
            <input type="text" class="form-control" id="director" name="director"/>
            @include('partials.error-message', 
            ['fieldTitle' => 'director'])
        </div>
        <div class="form-group">
            <label for="title">Year</label>
            <input type="text" class="form-control" id="year" name="year"/>
            @include('partials.error-message', 
            ['fieldTitle' => 'year'])
        </div>
        <div class="form-group">
            <label for="body">Storyline</label>
            <textarea class="form-control" id="storyline" name="storyline"></textarea>
            @include('partials.error-message', 
            ['fieldTitle' => 'storyline'])
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection