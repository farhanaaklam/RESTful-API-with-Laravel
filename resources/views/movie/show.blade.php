@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">View Tv Show Data</h5>
                    <a href="{{ route('movie.index',['id'=> $movie->id]) }}" class="btn btn-primary btn-sm">All Tv Shows</a>
                </div>

                <div class="card-body bg-dark">
                    <div class="row justify-content-center">
                        <div class="col-md-12" style="max-width: 30rem;">
                            <div class="card-body text-white bg-dark mb-1">
                                <div class="d-flex">
                                <h5 class="card-title">Season: {{ $movie->season }}</h5>
                                <h5 class="card-title ml-3">Episode: {{ $movie->episode }} </h5>
                                </div>
                             <p class="card-text">Quote: {{ $movie->quote }} </p>
                            </div>
                             <img class="card-img-bottom" src="https://picsum.photos/700" alt="qoutes image">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
