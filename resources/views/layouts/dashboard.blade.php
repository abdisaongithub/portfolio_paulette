<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('dashboard/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
</head>

<body id="page-top">
<div id="wrapper">
    <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
        <div class="container-fluid d-flex flex-column p-0">
            <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="/">
                <div class="sidebar-brand-icon "><i class="fas fa-home"></i></div>
                <div class="sidebar-brand-text mx-3"><span>Home</span></div>
            </a>
            <hr class="sidebar-divider my-0">
            <ul class="nav navbar-nav text-light" id="accordionSidebar">
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('background.index') }}"><i
                                class="fas fa-image"></i><span>Background</span></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('skill.index') }}"><i
                                class="fas fa-hands"></i><span>Skills</span></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('about.index') }}"><i
                                class="fas fa-question"></i><span>About</span></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('feature.index') }}"><i
                                class="fas fa-table"></i><span>Features</span></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('project.index') }}"><i
                                class="fas fa-hammer"></i><span>Projects</span></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('social.index') }}"><i
                                class="fas fa-users"></i><span>Social</span></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('contact.index') }}"><i
                                class="fas fa-phone"></i><span>Contact</span></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('pass.index') }}"><i
                                class="fas fa-lock"></i><span>Change Password</span></a></li>
            </ul>
            <div class="text-center d-none d-md-inline">
                <button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button>
            </div>

        </div>
    </nav>

    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                <div class="container-fluid">
                    <button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i
                                class="fas fa-bars"></i></button>
                    @yield('title')
                    <ul class="nav navbar-nav flex-nowrap ml-auto">

                        <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link"
                                                                            data-toggle="dropdown" aria-expanded="false"
                                                                            href="#"><i class="fas fa-search"></i></a>
                            <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" role="menu"
                                 aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto navbar-search w-100">
                                    <div class="input-group"><input class="bg-light form-control border-0 small"
                                                                    type="text" placeholder="Search for ...">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary py-0" type="button"><i
                                                        class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <li class="nav-item dropdown no-arrow" role="presentation">
                            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link"
                                                                       data-toggle="dropdown" aria-expanded="false"
                                                                       href="#">
                                    <span
                                            class="d-none d-lg-inline mr-2 text-gray-600 small">Paulette</span></a>
                                {{--                                TODO: replace Username and Icon Image--}}
                                <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu">

                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>


            <div class="container-fluid">
                @include('flash-message')

                @yield('content')
            </div>


        </div>
        <footer class="bg-white sticky-footer">
            <div class="container my-auto">
                <div class="text-center my-auto copyright"><a href="https://t.me/abd_dba" target="_blank"> <span>Powered By Hamile Solutions</span>
                    </a></div>
            </div>
        </footer>
    </div>

{{--    <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>--}}
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="{{ asset('dashboard/js/script.min.js')}} "></script>

</body>

</html>
