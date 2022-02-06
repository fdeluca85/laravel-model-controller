@extends('layouts.base')

@section('pageTitle')
    Laravel's Movies
@endsection



@section('pageContent')
<h1>Larevel's Movies</h1>

<div class="cards">
    @foreach ($movies as $movie)
    <div class="card">
        <h2>{{$movie['title']}}</h2>
        <h3>{{$movie['original_title']}}</h3>
        <p>{{$movie['vote']}}</p>
    </div>
        
    @endforeach
</div>
@endsection