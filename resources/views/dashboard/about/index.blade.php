@extends('layouts.dashboard')

@section('title')
    <div class="row">
        <div class="col-3 mr-5">
            <h3><strong>About</strong></h3>
        </div>
        <div class="col ml-5">
            <a href="{{ route('about.create') }}" class="btn btn-sm btn-outline-success">Add an About</a>
        </div>
    </div>
@endsection
@section('content')

    @if(count($abouts) > 0)

        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Time</th>
                <th scope="col">Title</th>
                <th scope="col">Detail</th>
                <th scope="col">Image</th>
                <th scope="col" colspan="2">Handle</th>
            </tr>
            </thead>
            <tbody>

            @foreach($abouts as $about)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $about->time }}</td>
                    <td>{{ $about->title }}</td>
                    <td> {{ $about->detail }}</td>
                    <td> <a href="{{ Storage::url($about->image) }}" target="_blank">View Image</a> </td>
                    <td>
                        <a class="btn btn-sm btn-outline-info mr-3"
                           href="{{ route('about.edit', $about->id) }}">Edit
                        </a>
                                                <form class="d-inline" action="{{ route('about.destroy', $about->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-outline-danger"
                                                    >Delete</button>
                                                </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <div class="row">
            <div class="col-md-6">
                Not About Added Yet
            </div>
            <div class="col-md-6">
                <a href="{{ route('about.create') }}" class="btn btn-sm btn-outline-success">Add an About</a>
            </div>
        </div>
    @endif

@endsection