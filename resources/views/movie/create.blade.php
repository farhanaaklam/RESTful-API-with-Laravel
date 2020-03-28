@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-light d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Create Tv Shows</h5>
                    <a href="{{ route('movie.index') }}" class="btn btn-light">Back to all Tv Shows</a>
                </div>

                 <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-6 ">
                        @if(Session::has('success'))
                            <div class="alert alert-success"> {{Session::get('success')}} </div>
                            @endif
                            <form action="{{ route('movie.store') }}" method="post">
                                @csrf 
                                <div class="form-group">
                                    <label for="">Season</label>
                                    <input type="text" class="form-control"  name="season" placeholder="Enter Show Season">
                                </div>
                                <div class="form-group">
                                    <label for="">Episode</label>
                                    <input type="text" class="form-control"  name="episode" placeholder="Enter Episode">
                                </div>
                                <div class="form-group">
                                    <label for="">Quote</label>
                                    <input type="text" class="form-control"  name="quote" placeholder="Enter Favourite Quote">
                                </div>
                                <div class="form-group text-center">
                                    <button class="btn btn-success">
                                        Add Tv Shows
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
