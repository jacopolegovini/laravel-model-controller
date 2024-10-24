@extends("layouts.app")

@section("page-title", "Homepage")

@section("main-content")
<main class="my-3 d-flex justify-content-center">
    <a class="btn btn-primary" href="{{route("movie")}}">Clicca qui per vedere i film</a>
</main>
@endsection
