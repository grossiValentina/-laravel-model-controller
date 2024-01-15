@extends('layouts.app')

@section('content')
<h1>Movies</h1>
<div class="container">
    <div class="row row-cols-3">
        <div class="col">
            <!-- card -->
            @foreach ($movies as $movie)
            <div class="card" style="width: 15rem;">
                <img src=" {{ $movie->image }} " class="card-img-top" alt="...">
                <h5 class="card-body text-center p-2 m-0">
                    {{ $movie->title }}
                </h5>
                <p class="text-center fw-lighter fst-italic">Original Title: {{ $movie->original_title }}</p>
            </div>
            @endforeach
        </div>
    </div>

</div>
@endsection