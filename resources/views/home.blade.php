
<ul>
    @foreach ($movies as $movie)
    <li>{{$movie['title']}} - {{$movie['original_title']}}</li>
        
    @endforeach
</ul>