@extends('layouts.dashboard')

@section('title')
    <div class="row">
        <div class="col mr-5">
            <h3><strong>Password</strong></h3>
        </div>
    </div>
@endsection


@section('content')


    <section class="contact-clean" style="width: 60%; align-content: center">
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <form method="POST" action="{{ route('pass.update') }}" enctype="multipart/form-data">
            @csrf
            <h2 class="text-center">New Password</h2><!-- Start: Success Example -->
            <div class="form-group">
                <label for="name">Current Password</label>
                <input class="form-control" type="password" name="current" placeholder="Current Password">
            </div>

            <div class="form-group">
                <label for="name">New Password</label>
                <input class="form-control" type="password" name="password" placeholder="New Password">
            </div>

            <div class="form-group">
                <label for="name">Confirm Password</label>
                <input class="form-control" type="password" name="password2" placeholder="Confirm Password">
            </div>

            <button class="btn btn-success" type="submit">Change Password</button>
        </form>
    </section>

@endsection
