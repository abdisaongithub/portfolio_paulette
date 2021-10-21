@extends('layouts.dashboard')

@section('title')
    <h3><strong>Contacts</strong></h3>
@endsection
@section('content')

    @if(count($contacts) > 0)

        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Message</th>
                <th scope="col" colspan="2">Handle</th>
            </tr>
            </thead>
            <tbody>

            @foreach($contacts as $contact)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td> {{ $contact->phone }}</td>
                    <td> {{ $contact->message }}</td>
                    <td>
{{--                        <a class="btn btn-sm btn-outline-info mr-3"--}}
{{--                           href="{{ route('contact.edit', $about->id) }}">Edit--}}
{{--                        </a>--}}
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
                No Contact Found
            </div>
{{--            <div class="col-md-6">--}}
{{--                <a href="{{ route('about.create') }}" class="btn btn-sm btn-outline-success">Add an About</a>--}}
{{--            </div>--}}
        </div>
    @endif

@endsection