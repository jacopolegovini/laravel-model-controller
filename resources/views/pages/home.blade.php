@extends("layouts.app")

@section("page-title", "Homepage")

@section("main-content")
<main>
    <a href="{{route("pages.movies.index")}}">Clicca qui per vedere i film</a>
</main>
@endsection
