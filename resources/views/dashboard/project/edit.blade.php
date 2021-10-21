@extends('layouts.dashboard')

@section('title')
    <div class="row">
        <div class="col mr-5">
            <h3><strong>Add a Project</strong></h3>
        </div>
    </div>
@endsection

@section('content')

    <section class="contact-clean" style="width: 60%; align-content: center">
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <form method="POST" action="{{ route('project.update', $project->id) }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <h2 class="text-center">New Project</h2>
            <div class="form-group">
                <label for="name">Link</label>
                <input class="form-control" type="text" name="link" value="{{ $project->link }}" placeholder="link">
            </div>

            <div class="form-group">
                <label for="name">Description</label>
                <input class="form-control" type="text" name="description" value="{{ $project->description }}" placeholder="Description">
            </div>
            <button class="btn btn-success  " type="submit">Update</button>
        </form>
    </section>

@endsection
