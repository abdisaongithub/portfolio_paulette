@extends('layouts.dashboard')

@section('title')
    <div class="row">
        <div class="col mr-5">
            <h3><strong>Edit an About</strong></h3>
        </div>
    </div>
@endsection

@section('content')

    <section class="contact-clean" style="width: 60%; align-content: center">
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <form method="POST" action="{{ route('about.update', $about->id) }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <h2 class="text-center">New About</h2><!-- Start: Success Example -->
            <div class="form-group">
                <label for="name">Time</label>
                <input class="form-control" type="text" name="time" value="{{ $about->time }}" placeholder="Time">
            </div>

            <div class="form-group">
                <label for="name">Title</label>
                <input class="form-control" type="text" name="title" value="{{ $about->title }}" placeholder="Title">
            </div>

            <div class="form-group">
                <label for="name">Detail</label>
                <textarea class="form-control" type="text" name="detail" rows="6">value="{{ $about->detail }}"</textarea>
            </div>

            <div class="form-group">
                <h5>Add image</h5>
                <input class="form-control-file" type="file" name="image">
            </div>
            <button class="btn btn-success" type="submit">Update</button>
        </form>
    </section><!-- End: Contact Form Clean -->

@endsection
