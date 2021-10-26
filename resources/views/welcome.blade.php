<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Paulette W.</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body id="page-top">
<nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
    <div class="container"><a class="navbar-brand" href="/">Paulette W.</a>
        <button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right"
                type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="nav navbar-nav ml-auto text-uppercase">
                <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#about">About</a>
                </li>
                <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger"
                                                            href="#services">Skills</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#portfolio">Features</a>
                </li>
                <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger"
                                                            href="#projects">Projects</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger"
                                                            href="#posts">Posts</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger"
                                                            href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>


<header class="masthead" style="background-image:url('{{ Storage::url($bgs->image) }}'); background-position: top;">
    <div class="container">
        <div class="intro-text">
            <div class="intro-heading "><span>Leading in S.T.E.M</span></div>
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" role="button" target="_blank"
               href="https://calendly.com/paulettewatson/digital-transformation-consultation/">Appointment</a></div>
    </div>
</header>


<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-uppercase">About</h2>
{{--                <h3 class="text-muted section-subheading">My Journey Through The Years</h3>--}}
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <ul class="list-group timeline">
                    @foreach($abouts as $about)
                        <li class="list-group-item {{ $loop->iteration%2 == 1 ? '' : 'timeline-inverted' }}">
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="{{Storage::url($about->image)}}"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>{{ $about->time }}</h4>
                                    <h4 class="subheading">{{ $about->title }}</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">

                                        {{ $about->detail }}

                                    </p>
                                </div>
                            </div>
                        </li>
                    @endforeach

                    <li class="list-group-item timeline-inverted">
                        <div class="timeline-image">
                            <h4>Be Part<br>&nbsp;Of Our<br>&nbsp;Story!</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-uppercase section-heading">Skills</h2>
{{--                <h3 class="text-muted section-subheading">Lorem ipsum dolor sit amet consectetur</h3>--}}
            </div>
        </div>
        <div class="row text-center">
            @foreach($skills as $skill)
                <div class="col-md-4"><span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa {{ ($loop->iteration == 1 ? 'fa-book' : $loop->iteration == 2) ? 'fa-desktop' : 'fa-lock' }} fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading">{{ $skill->title }}</h4>
                    <p class="text-muted">{{ $skill->detail }}</p>
                </div>
            @endforeach
            {{--            <div class="col-md-4"><span class="fa-stack fa-4x">--}}
            {{--                    <i class="fa fa-circle fa-stack-2x text-primary"></i>--}}
            {{--                    <i class="fa fa-desktop fa-stack-1x fa-inverse"></i></span>--}}
            {{--                <h4 class="section-heading">IT SKILLS</h4>--}}
            {{--                <p class="text-muted" style="text-align: center;">--}}
            {{--                    Software application: Microsoft Office Word, Access, Excel, Presentation, Internet based research systems; Adobe CS6 InDesign, Photoshop, Illustrator, Dreamweaver, Fireworks--}}

            {{--                    Programming: HTML, JavaScript, Python, Php/My SQL, JQuery;--}}

            {{--                    Social Media: Facebook, Twitter, LinkedIn, Pinterest, Google+, Tumblr, WordPress etc--}}

            {{--                    ICT courses Dida, Imedia, ICT GCSE, A Levels ICT/Computing, ECDL, ICT training; Google apps; Apps for good</p>--}}
            {{--            </div>--}}
            {{--            <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-lock fa-stack-1x fa-inverse"></i></span>--}}
            {{--                <h4 class="section-heading">VOLUNTARY</h4>--}}
            {{--                <p class="text-muted">Current Voluntary Board Director/Trustee/School Governor experience 2016--}}

            {{--                    My Governance role, involves corporate responsibilities where I have successfully implemented policies agreed by the strategic boards. This involved promoting a culture that reflects the vision and values of the organisation. Cultivating a culture of development and learning that acts as a magnet attracting and retaining the best teachers and leaders to work in our organisations.</p>--}}
            {{--            </div>--}}
        </div>
    </div>
</section>
<section id="portfolio" class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-uppercase section-heading">Features</h2>
{{--                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>--}}
            </div>
        </div>

        <div class="row">
            @foreach($features as $feature)
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal{{ $loop->iteration }}">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-expand fa-3x"></i>
                                <br>
                                <span>Detail</span>
                            </div>
                        </div>
                        <img class="img-fluid" style="height: 260px;" src="{{ Storage::url($feature->image) }}"></a>
                    <div class="portfolio-caption">
                        <h4>{{ $feature->title }}</h4>
                        <!--                        <p class="text-muted">Illustration</p>-->
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section id="projects" class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-uppercase section-heading">Projects</h2>
{{--                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>--}}
            </div>
        </div>

        @foreach($projects as $project)

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Title</h3>
                        <p> lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum
                            dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit
                            amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem
                            ipsum dolor sit amet </p>
                    </div>
                    <div class="col-md-6">
                        <iframe
                                height="350"
                                width="550"
                                src="https://www.youtube.com/embed/cU56iRVt5Hs"
                                title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>

        @endforeach


        {{--            <div class="col-md-4">--}}
        {{--                <iframe--}}
        {{--                        height="250"--}}
        {{--                        width="350"--}}
        {{--                        src="https://www.youtube.com/embed/cU56iRVt5Hs"--}}
        {{--                        title="YouTube video player"--}}
        {{--                        frameborder="0"--}}
        {{--                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"--}}
        {{--                        allowfullscreen>--}}
        {{--                </iframe>--}}
        {{--            </div>--}}


        {{--            <div class="col-md-4">--}}
        {{--                <iframe--}}
        {{--                        height="250"--}}
        {{--                        width="350"--}}
        {{--                        src="https://www.youtube.com/embed/cU56iRVt5Hs"--}}
        {{--                        title="YouTube video player"--}}
        {{--                        frameborder="0"--}}
        {{--                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"--}}
        {{--                        allowfullscreen>--}}
        {{--                </iframe>--}}
        {{--            </div>--}}


    </div>
</section>

<section id="posts" class="bg-light" style="padding: 0 50px 50px 50px;">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-uppercase">Posts</h2>
{{--                <h3 class="text-muted section-subheading">My Journey Through The Years</h3>--}}
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content. With
                            supporting text below as a natural lead-in to additional content. With supporting text below
                            as a natural lead-in to additional content. </p>
                        <a href="#" class="btn btn-outline-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- TODO: chage contact background image --}}

<section id="contact" style="background-image:url('{{ asset('img/paulette/bg.jpg') }}');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-uppercase section-heading">Contact</h2>
{{--                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>--}}
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form id="contactForm" name="contactForm" novalidate="novalidate">
                    <div class="form-row">
                        <div class="col col-md-6">
                            <div class="form-group"><input class="form-control" type="text" id="name"
                                                           placeholder="Your Name *" required=""><small
                                        class="form-text text-danger flex-grow-1 help-block lead"></small></div>
                            <div class="form-group"><input class="form-control" type="email" id="email"
                                                           placeholder="Your Email *" required=""><small
                                        class="form-text text-danger help-block lead"></small></div>
                            <div class="form-group"><input class="form-control" type="tel" placeholder="Your Phone *"
                                                           required=""><small
                                        class="form-text text-danger help-block lead"></small></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><textarea class="form-control" id="message"
                                                              placeholder="Your Message *" required=""></textarea><small
                                        class="form-text text-danger help-block lead"></small></div>
                        </div>
                        <div class="col">
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">
                                Send Message
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4"><span class="copyright">Powered By: <strong><a style="color: #000000" target="_blank"
                                                                                 href="https://t.me/abd_dba">Hamile Solutions</a></strong></span>
            </div>
            <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    @foreach($socials as $social)
                        <li class="list-inline-item"><a href="{{ $social->link }}" target="_blank"><i
                                        class="fa fa-facebook"></i></a></li>
                                                <li class="list-inline-item"><a href="https://www.facebook.com/BeMeproject"><i class="fa fa-facebook"></i></a></li>
                                                <li class="list-inline-item"><a href="https://www.instagram.com/symnicola/"><i class="fa fa-instagram"></i></a></li>
                                                <li class="list-inline-item"><a href="https://uk.linkedin.com/in/paulette-watson"><i class="fa fa-linkedin"></i></a></li>
                    @endforeach
                </ul>

                <br>

                <a href="{{ route('dashboard.index') }}">Admin's Area</a>

            </div>
            <div class="col-md-4">
                <ul class="list-inline quicklinks">
                    <li class="list-inline-item"><a style="color: #000000" href="https://academyachievers.co.uk/">Academy
                            Achievers' Website</a></li>
                    <!--                        <li class="list-inline-item"><a style="color: #000000" href="#">Terms of Use</a></li>-->
                </ul>
            </div>
        </div>
    </div>
</footer>


@foreach($features as $feature)
    <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1"
         id="portfolioModal{{ $loop->iteration }}">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">{{ $feature->title }}</h2>
                                    <!--                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>-->
                                    <img class="img-fluid d-block mx-auto" src="{{ Storage::url($feature->image) }}">
                                    <p>
                                        {{ $feature->description }}
                                    </p>
                                    <!--                                    <ul class="list-unstyled">-->
                                    <!--                                        <li>Date: January 2017</li>-->
                                    <!--                                        <li>Client: Threads</li>-->
                                    <!--                                        <li>Category: Illustration</li>-->
                                    <!--                                    </ul>-->
                                    <a style="align-content: center " href="{{ $feature->link }}" target="_blank"> Read
                                        More ... </a>
                                    <br>
                                    <br>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fa fa-times"></i>
                                        <span> Close  </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
<script src="{{ asset('js/script.min.js') }}"></script>
</body>

</html>
