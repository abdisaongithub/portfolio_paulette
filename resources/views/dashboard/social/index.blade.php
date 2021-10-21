@extends('layouts.dashboard')

@section('title')
    <h3><strong>Social</strong></h3>
@endsection
@section('content')

    @if(count($socials) > 0)

        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nme</th>
                <th scope="col">Link</th>
                <th scope="col" colspan="2">Handle</th>
            </tr>
            </thead>
            <tbody>

            @foreach($socials as $social)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $social->name }}</td>
                    <td> <a href="{{ $social->link }}" target="_blank">View Social Media Account</a> </td>
                    <td>
                        <a class="btn btn-sm btn-outline-info mr-3"
                           href="{{ route('social.edit', $social->id) }}">Edit
                        </a>
{{--                        <form class="d-inline" action="{{ route('about.destroy', $about->id) }}" method="post">--}}
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
                Not Social Media Account Added Yet
            </div>
{{--            <div class="col-md-6">--}}
{{--                <a href="{{ route('about.create') }}" class="btn btn-sm btn-outline-success">Add an About</a>--}}
{{--            </div>--}}
        </div>
    @endif

@endsection