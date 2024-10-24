@extends("layouts.app")

@section("page-title", "Homepage")

@section("main-content")
<main>
    <a href="{{route("movie")}}">Clicca qui per vedere i film</a>
</main>
@endsection
