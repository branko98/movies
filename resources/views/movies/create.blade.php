@extends('layouts.master')

@section('title', 'Movies')


@section('content')
    <h1>Add new movie</h2>
    <form action="">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" name="genre" id="genre" class="form-control">
        </div>
        <div class="form-group">
                <label for="director">Director</label>
                <input type="text" name="director" id="director" class="form-control">
        </div>
        <div class="form-group">
                <label for="year">Year</label>
                <input type="text" name="year" id="year" class="form-control">
        </div>
        <div class="form-group">
            <label for="storyline">Storyline</label>
            <textarea type="text" name="storyline" id="storyline" class="form-control" rows="5"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit Post</button>
        </div>
    </form>
@endsection
