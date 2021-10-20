@extends('layouts.dashboard')

@section('title')
    <div class="row">
        <div class="col mr-5">
            <h3><strong>Background</strong></h3>
        </div>
        <div class="col ml-5">
            <a href="{{ route('background.create') }}" class="btn btn-sm btn-outline-success">Add a Background</a>
        </div>
    </div>
@endsection



@section('content')

    @if(count($background) > 0)

        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col" colspan="2">Handle</th>
            </tr>
            </thead>
            <tbody>

            @foreach($background as $bg)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $bg->name }}</td>
                    <td><a href="{{ Storage::url($bg->image) }}" target="_blank">View Image</a> </td>
                    <td>
{{--                        <a class="btn btn-sm btn-outline-info mr-3"--}}
{{--                           href="{{ route('background.edit', $bg->id) }}">Edit--}}
{{--                        </a>--}}
                        <form class="d-inline" action="{{ route('background.destroy', $bg->id) }}" method="post">
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
                Not Backgrounds Added Yet
            </div>
            <div class="col-md-6">
                <a href="{{ route('background.create') }}" class="btn btn-sm btn-outline-success">Add a Background</a>
            </div>
        </div>
    @endif

@endsection
