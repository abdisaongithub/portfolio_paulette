@extends('layouts.dashboard')

@section('title')
    <div class="row">
        <div class="col mr-5">
            <h3><strong>Add an About</strong></h3>
        </div>
    </div>
@endsection

@section('content')

    <section class="contact-clean" style="width: 60%; align-content: center">
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <form method="POST" action="{{ route('about.store') }}" enctype="multipart/form-data">
            @csrf
            <h2 class="text-center">New About</h2><!-- Start: Success Example -->
            <div class="form-group">
                <label for="name">Time</label>
                <input class="form-control" type="text" name="time" placeholder="Time">
            </div>

            <div class="form-group">
                <label for="name">Title</label>
                <input class="form-control" type="text" name="title" placeholder="Title">
            </div>

            <div class="form-group">
                <label for="name">Detail</label>
                <textarea class="form-control" type="text" rows="6" name="detail"></textarea>
            </div>

            <div class="form-group">
                <h5>Add image</h5>
                <input class="form-control-file" type="file" name="image">
            </div>
            <button class="btn btn-success  " type="submit">Add</button>
        </form>
    </section><!-- End: Contact Form Clean -->

@endsection
