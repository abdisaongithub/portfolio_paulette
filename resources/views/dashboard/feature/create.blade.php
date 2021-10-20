@extends('layouts.dashboard')

@section('title')
    <div class="row">
        <div class="col mr-5">
            <h3><strong>Add a Feature</strong></h3>
        </div>
    </div>
@endsection

@section('content')

    <section class="contact-clean" style="width: 60%; align-content: center">
        @error('title', 'link')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <form method="POST" action="{{ route('feature.store') }}" enctype="multipart/form-data">
            @csrf
            <h2 class="text-center">New Feature</h2><!-- Start: Success Example -->

            <div class="form-group">
                <label for="name">Title</label>
                <input class="form-control" type="text" name="title" placeholder="Title">
            </div>

            <div class="form-group">
                <label for="name">Link</label>
                <input class="form-control" type="text" name="link" placeholder="Link">
            </div>

            <div class="form-group">
                <label for="name">Description</label>
                <textarea class="form-control" type="text" name="description" rows="8"></textarea>
            </div>

            <div class="form-group">
                <h5>Add image</h5>
                <input class="form-control-file" type="file" name="image">
            </div>

            <button class="btn btn-success  " type="submit">Add</button>
        </form>
    </section><!-- End: Contact Form Clean -->

@endsection
