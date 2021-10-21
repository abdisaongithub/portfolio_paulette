@extends('layouts.dashboard')

@section('title')
    <h3><strong>Project</strong></h3>
@endsection

@section('content')

    @if(count($projects) > 0)

        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Link</th>
                <th scope="col">Description</th>
                <th scope="col" colspan="2">Handle</th>
            </tr>
            </thead>
            <tbody>

            @foreach($projects as $project)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td> <a href="{{ $project->link }}" target="_blank">View Video</a> </td>
                    <td>{{ $project->description ?? 'No Description Provided' }}</td>
                    <td>
                        <a class="btn btn-sm btn-outline-info mr-3"
                           href="{{ route('project.edit', $project->id) }}">Edit
                        </a>
                        <form class="d-inline" action="{{ route('project.destroy', $project->id) }}" method="post">
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
                No Project Added Yet
            </div>
            <div class="col-md-6">
                <a href="{{ route('project.create') }}" class="btn btn-sm btn-outline-success">Add a Project</a>
            </div>
        </div>
    @endif

@endsection
