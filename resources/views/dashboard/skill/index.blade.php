@extends('layouts.dashboard')

@section('title')
    <h3>Skills</h3>
@endsection

@section('content')

    @if(count($skills) > 0)

        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Detail</th>
                <th scope="col" colspan="2">Handle</th>
            </tr>
            </thead>
            <tbody>

            @foreach($skills as $skill)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $skill->title }}</td>
                    <td> {{ $skill->detail }}</td>
                    <td>
                                                <a class="btn btn-sm btn-outline-info mr-3"
                                                   href="{{ route('skill.edit', $skill->id) }}">Edit
                                                </a>
{{--                        <form class="d-inline" action="{{ route('background.destroy', $bg->id) }}" method="post">--}}
{{--                            @csrf--}}
{{--                            @method('delete')--}}
{{--                            <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-outline-danger"--}}
{{--                            >Delete</button>--}}
{{--                        </form>--}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <div class="row">
            <div class="col-md-6">
                Not Skill Added Yet
            </div>
            <div class="col-md-6">
                <a href="{{ route('skill.create') }}" class="btn btn-sm btn-outline-success">Add a Skill</a>
            </div>
        </div>
    @endif

@endsection