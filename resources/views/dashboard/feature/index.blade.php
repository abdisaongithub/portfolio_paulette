@extends('layouts.dashboard')

@section('title')
    <h3><strong>Features</strong></h3>
@endsection
@section('content')

    @if(count($features) > 0)

        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Link</th>
                <th scope="col">Image</th>
                <th scope="col" colspan="2">Handle</th>
            </tr>
            </thead>
            <tbody>

            @foreach($features as $feature)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $feature->title }}</td>
                    <td> {{ $feature->description }}</td>
                    <td><a target="_blank" href="{{ $feature->link }}"> {{ $feature->link }} </a> </td>
                    <td> <a href="{{ Storage::url($feature->image) }}" target="_blank">View Image</a> </td>
                    <td>
                        <a class="btn btn-sm btn-outline-info mr-3"
                           href="{{ route('feature.edit', $feature->id) }}">Edit
                        </a>
                        <form class="d-inline" action="{{ route('feature.destroy', $feature->id) }}" method="post">
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
                No Feature Added Yet
            </div>

            <div class="col-md-6">
                <a href="{{ route('feature.create') }}" class="btn btn-sm btn-outline-success">Add a Feature</a>
            </div>
        </div>
    @endif

@endsection
