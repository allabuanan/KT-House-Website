@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Films</h2>
            </div>
            <div class="pull-right">
                @can('film-create')
                <a class="btn btn-success" href="{{ route('films.create') }}"> Create New Film</a>
                @endcan
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>Director</th>
            <th>Producer</th>
            <th>Box Office</th>
            <th>Release Date</th>
            <th width="280px">Action</th>
        </tr>
	    @foreach ($films as $film)
	    <tr>
	        <td>{{ $film->title }}</td>
	        <td>{{ $film->director }}</td>
            <td>{{ $film->producer }}</td>
            <td>₱{{ number_format($film->boxOffice, 2, ",",".") }}</td>
            <td>{{ $film->releaseDate }}</td>

	        <td>
                <form action="{{ route('films.destroy',$film->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('films.show',$film->id) }}">Show</a>
                    @can('film-edit')
                    <a class="btn btn-primary" href="{{ route('films.edit',$film->id) }}">Edit</a>
                    @endcan


                    @csrf
                    @method('DELETE')
                    @can('film-delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endcan
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>


    {!! $films->links() !!}

@endsection