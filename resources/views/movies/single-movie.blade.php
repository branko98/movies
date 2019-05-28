@extends('layouts.master')

@section('title', 'Movies')


@section('content')
    <h1>{{ $movie->title }} </h2>
    <p>{{ $movie->director }} - {{ $movie->genre }} -  {{ $movie->year }}</p>
    <h5> {{ $movie->storyline }}</h5>
@endsection
