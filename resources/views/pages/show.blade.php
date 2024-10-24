@extends("layouts.app")

@section("page-title", "Movie")

@section("main-content")
<main class="container mt-3">
    <p class="card">
        {{$movies->title}}
    </p>
</main>

@endsection
