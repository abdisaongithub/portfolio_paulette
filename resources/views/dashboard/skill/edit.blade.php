@extends('layouts.dashboard')

@section('title')
    <div class="row">
        <div class="col mr-5">
            <h3><strong>Add a Skill</strong></h3>
        </div>
    </div>
@endsection

@section('content')

    <section class="contact-clean" style="width: 60%; align-content: center">
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <form method="POST" action="{{ route('skill.update', $skill->id) }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <h2 class="text-center">Update Skill</h2><!-- Start: Success Example -->
            <div class="form-group">
                <label for="name">Title</label>
                <input class="form-control" type="text" name="title" value="{{ $skill->title }}" placeholder="Title">
            </div>
            <div class="form-group">
                <label for="name">Detail</label>
                <textarea class="form-control" type="text" name="detail" rows="8">{{ $skill->detail }}</textarea>
            </div>

            <button class="btn btn-success  " type="submit">Update</button>
        </form>
    </section><!-- End: Contact Form Clean -->

@endsection
