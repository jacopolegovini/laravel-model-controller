@extends("layouts.app")

@section("page-title", "Movie")

@section("main-content")
<main class="container mt-3">
    <div class="show-card d-flex justify-content-center">
        <p class="card p-2">
            {{$movies->title}}
        </p>
    </div>
    <div class="d-flex justify-content-center"><button class="btn btn-primary">Aggiungi al carrello</button></div>
</main>

@endsection
