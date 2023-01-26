@extends('layouts.app')

@section('index')
<main >
    @foreach ($comics as $comic )
    <div class="card" style="width: 18rem;">
        <img src=" {{ Vite::asset($comic['thumb']) }} " class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $comic->title }}</h5>
            <p class="card-text"> {{ $comic['description']}} </p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"> {{ $comic['series']}} </li>
            <li class="list-group-item"> {{ $comic['sale_date']}} </li>
            <li class="list-group-item">{{ $comic['type']}}</li>
        </ul>
        <div class="card-body">
            <a href="#" class="card-link">{{ $comic['price']}}</a>
        </div>
    </div>
    @endforeach
</main>
@endsection