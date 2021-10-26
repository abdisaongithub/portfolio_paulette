@extends('layouts.dashboard')

@section('title')
    <div class="row">
        <div class="col-3 mr-5">
            <h3><strong>Post</strong></h3>
        </div>
        <div class="col ml-5">
            <a href="{{ route('post.create') }}" class="btn btn-sm btn-outline-success">Add a Post</a>
        </div>
    </div>
@endsection

@section('content')

    @if(count($posts) > 0)

        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Link</th>
                <th scope="col" colspan="2">Handle</th>
            </tr>
            </thead>
            <tbody>

            @foreach($posts ?? '' as $post)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $post->title }}</td>
                    <td> {{ $post->description }}</td>
                    <td> <a href="{{ $post->link }}" target="_blank">View Link</a> </td>
                    <td>
                        <a class="btn btn-sm btn-outline-info mr-3"
                           href="{{ route('post.edit', $post->id) }}">Edit
                        </a>
                        <form class="d-inline" action="{{ route('post.destroy', $post->id) }}" method="post">
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
                Not Post Added Yet
            </div>
            <div class="col-md-6">
                <a href="{{ route('post.create') }}" class="btn btn-sm btn-outline-success">Add a Post</a>
            </div>
        </div>
    @endif

@endsection