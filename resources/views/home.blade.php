@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-light d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Dashboard</h5>
                    <nav class="nav-item">
                        <a class="nav-link text-light" href="{{ route('movie.index') }}">All TV Show List</a>
                    </nav>    
                </div>

                 <div class="card-body d-flex">
                 @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!                   
                </div>
             </div>
        </div>
    </div>
</div>
@endsection
