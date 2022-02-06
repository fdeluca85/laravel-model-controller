@extends('layouts.base')

@section('pageTitle')
    Laravel's Movies
@endsection



@section('pageContent')


<div class="container">
    <div class="cards">
        @foreach ($movies as $movie)
        <div class="card">
            <h2>{{$movie['title']}}</h2>
            <h3>{{$movie['original_title']}}</h3>
            <span>{{$movie['vote']}}</span>
        </div>
            
        @endforeach
    </div>
</div>
@endsection