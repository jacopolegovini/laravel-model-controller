@extends("layouts.app")

@section("page-title", "Movies")

@section("main-content")
<main class="container">
    <ul class="movies-list d-flex justify-content-between gap-2">
        @foreach ($movies as $index => $movie)
            <li class="d-flex flex-column card">
                <a href="{{route("show", $index)}}"><p>Title: {{$movie->title}}</p></a>
                <p>Original Title: {{$movie->origianl_title}}</p>
                <p>Nationality: {{$movie->nationality}}</p>
                <p>Date: {{$movie->date}}</p>
                <p>Vote: {{$movie->vote}}</p>
            </li>
        @endforeach
    </ul>
</main>

@endsection
