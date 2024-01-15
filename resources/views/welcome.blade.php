@extends('layouts.app')

@section('content')
<h1 class="text-center fw-bold fst-italic p-4">Movies</h1>
<div class="container">
    <div class="row d-flex justify-content-between">
        
            <!-- card -->
            @foreach ($movies as $movie)
            <div class="card bg-light mb-5" style="width: 15rem;">
                <img src=" {{ $movie->image }} " class="card-img-top w-100" alt="...">
                <h5 class="card-body text-center p-2 m-0">
                    {{ $movie->title }}
                </h5>
                <p class="text-center fw-lighter fst-italic mb-0">Original Title: {{ $movie->original_title }}</p>
                <p class="text-center fw-lighter fst-italic">Nationality: {{ $movie->nationality }}</p>
            </div>
            @endforeach
    
    </div>

</div>
@endsection