@extends('layouts.master')

@section('title', 'Movies')


@section('content')
    <ul>
        @foreach ($movies as $movie)
            <li>
                <h2><a href="{{'movies/'. $movie->id}}">{{ $movie->title }} </a></h2>
                <p>{{ $movie->storyline }}</p>
            </li>
        @endforeach
    </ul>
@endsection
