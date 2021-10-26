@extends('layouts.dashboard')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex justify-content-between align-items-center mb-4">
            <h3 class="text-dark mb-0">Dashboard</h3>
            {{--            <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="#">--}}
            {{--                <i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Generate Report</a>--}}
        </div>
        <div class="row">
            <div class="col-md-6 col-xl-4 mb-4">
                <a href="{{ route('about.index') }}">
                    <div class="card shadow border-left-primary py-2">
                        <div class="card-body">
                            <div class="row align-items-center no-gutters">
                                <div class="col mr-2">
                                    <div class="text-uppercase text-primary font-weight-bold text-xs mb-1"><span>About / Descriptions</span>
                                    </div>
                                    <div class="text-dark font-weight-bold h5 mb-0"><span>{{ count($abouts) }}</span>
                                    </div>
                                </div>
                                <div class="col-auto"><i class="fas fa-clipboard-list fa-2x text-gray-300"></i></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-4 mb-4">
                <a href="{{ route('feature.index') }}">
                <div class="card shadow border-left-success py-2">
                    <div class="card-body">
                        <div class="row align-items-center no-gutters">
                            <div class="col mr-2">
                                <div class="text-uppercase text-success font-weight-bold text-xs mb-1">
                                    <span>Featured In</span></div>
                                <div class="text-dark font-weight-bold h5 mb-0"><span>{{ count($features) }}</span>
                                </div>
                            </div>
                            <div class="col-auto"><i class="fas fa-newspaper fa-2x text-gray-300"></i></div>
                        </div>
                    </div>
                </div>
                </a>
            </div>

            <div class="col-md-6 col-xl-4 mb-4">
                <a href="{{ route('post.index') }}">
                <div class="card shadow border-left-info py-2">
                    <div class="card-body">
                        <div class="row align-items-center no-gutters">
                            <div class="col mr-2">
                                <div class="text-uppercase text-info font-weight-bold text-xs mb-1"><span>Posts</span>
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="text-dark font-weight-bold h5 mb-0 mr-3">
                                            <span>{{ count($posts) }}</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto"><i class="fas fa-comments fa-2x text-gray-300"></i></div>
                        </div>
                    </div>
                </div>
                </a>
            </div>

            <div class="col-md-6 col-xl-4 mb-4">
                <a href="{{ route('project.index') }}">
                <div class="card shadow border-left-warning py-2">
                    <div class="card-body">
                        <div class="row align-items-center no-gutters">
                            <div class="col mr-2">
                                <div class="text-uppercase text-warning font-weight-bold text-xs mb-1">
                                    <span>Projects</span></div>
                                <div class="text-dark font-weight-bold h5 mb-0"><span>{{ count($projects) }}</span>
                                </div>
                            </div>
                            <div class="col-auto"><i class="fas fa-hammer fa-2x text-gray-300"></i></div>
                        </div>
                    </div>
                </div>
                </a>
            </div>

            <div class="col-md-6 col-xl-4 mb-4">
                <a href="{{ route('skill.index') }}">
                <div class="card shadow border-left-danger py-2">
                    <div class="card-body">
                        <div class="row align-items-center no-gutters">
                            <div class="col mr-2">
                                <div class="text-uppercase text-primary font-weight-bold text-xs mb-1">
                                    <span>Skills</span></div>
                                <div class="text-dark font-weight-bold h5 mb-0"><span>{{ count($skills) }}</span></div>
                            </div>
                            <div class="col-auto"><i class="fas fa-table fa-2x text-gray-300"></i></div>
                        </div>
                    </div>
                </div>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-xl-4 mb-4">
                <a href="{{ route('contact.index') }}">
                <div class="card shadow border-left-secondary py-2">
                    <div class="card-body">
                        <div class="row align-items-center no-gutters">
                            <div class="col mr-2">
                                <div class="text-uppercase text-primary font-weight-bold text-xs mb-1">
                                    <span>Contacts</span></div>
                                <div class="text-dark font-weight-bold h5 mb-0"><span>{{ count($contacts) }}</span>
                                </div>
                            </div>
                            <div class="col-auto"><i class="fas fa-users fa-2x text-gray-300"></i></div>
                        </div>
                    </div>
                </div>
                </a>
            </div>
        </div>
@endsection
