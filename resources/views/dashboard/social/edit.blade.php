@extends('layouts.dashboard')

@section('title')
    <div class="row">
        <div class="col mr-5">
            <h3><strong>Edit a Social Media Link</strong></h3>
        </div>
    </div>
@endsection

@section('content')

    <section class="contact-clean" style="width: 60%; align-content: center">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <form method="POST" action="{{ route('social.update', $social->id ) }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <h2 class="text-center">Edit Social Media Link</h2><!-- Start: Success Example -->
            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" type="text" name="name" value="{{ $social->name }}" placeholder="Name">
            </div>

            <div class="form-group">
                <label for="name">Link</label>
                <input class="form-control" type="text" name="link" value="{{ $social->link }}" placeholder="Link">
            </div>

            <button class="btn btn-success  " type="submit">Update</button>
        </form>
    </section><!-- End: Contact Form Clean -->

@endsection
