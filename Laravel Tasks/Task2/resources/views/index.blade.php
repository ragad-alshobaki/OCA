@extends('layout')
@section('content')

    <div style="display: flex; justify-content: space-between; align-items: center;">
        <h1>Explore Movies</h1>
        <a href="{{ url('create') }}" class="btn btn-success btn-sm" title="Add New Movie">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New
        </a>
    </div>
    <br>

    @foreach ($movies as $movie)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
            <h2 class="card-title">{{ $movie->movie_name }}</h2>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movie->movie_gener }}</h6>
            <p class="card-text">{{ $movie->movie_description }}</p>
            <a href="{{ url('/movies/' . $movie->id) }}" title="View movie"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
            <a href="{{ url('/movies/' . $movie->id . '/edit') }}" title="Edit movie"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

            <form method="POST" action="{{ url('/movies' . '/' . $movie->id) }}" accept-charset="UTF-8" style="display:inline">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-danger btn-sm" title="Delete movie" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
            </form>

            </div>
        </div>
    @endforeach

@endsection