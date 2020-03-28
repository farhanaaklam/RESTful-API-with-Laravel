@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        @if(Session::has('success'))
            <div class="alert alert-success"> {{Session::get('success')}} </div>
        @endif
            <div class="card">
                <div class="card-header bg-primary text-light d-flex justify-content-between align-items-center">
                   <h5 class="mb-0">All Favourite Tv Shows</h5>
                   <a href="{{ route('movie.create') }}" class="btn btn-light">Create Tv Show</a>
                </div>

                <div class="card-body">
                    <table class="table">
                    <thead>
                        <tr>
                            <th> Season </th>
                            <th> Episode </th>
                            <th> Quote </th>
                            <th> Action </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($movies as $movie)
                        <tr>
                            <td> {{ $movie->season }} </td>
                            <td> {{ $movie->episode }} </td>
                            <td> {{ $movie->quote }} </td>
                            <td class="d-flex">
                            <a href="{{ route('movie.show', ['id'=> $movie->id]) }}" class="btn btn-sm btn-success"> View </a>
                                <a href="{{route('movie.edit', ['id'=> $movie->id ])}}" class="btn btn-primary btn-sm ml-2" >Edit</a>
                                <form action="{{ route('movie.destroy') }}" method="post" class="ml-2">
                                @csrf
                                <input type="hidden" name="id" value="{{$movie->id}}">
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                                
                            </td>
                        </tr>
                    @endforeach    
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
