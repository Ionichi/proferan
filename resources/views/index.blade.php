<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Proferan - Professional Federation Accounting</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="WebApp for help UMKM to create simple financial statements" name="description" />
    <meta content="Proferam Team" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/landing/images/favicon.ico') }}">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/landing/css/bootstrap.min.css') }}" type="text/css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/landing/css/materialdesignicons.min.css') }}" />

    <!--pe-7 Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/landing/css/pe-icon-7-stroke.css') }}" />

    <!-- Magnific-popup -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/landing/css/magnific-popup.css') }}">

    <!-- Custom  sCss -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/landing/css/style.css') }}" />

</head>
<style>
    .image-container {
        position: relative;
        width: 100%;
    }

    .shadow-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 1;
    }
</style>

<body>

    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark">
        <div class="container-fluid">
            <!-- LOGO -->
            <a class="logo" href="index.html">
                <img src="{{ asset('assets/images/logo-light.png') }}" alt="" class="logo-light" height="32" />
                <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" class="logo-dark" height="32" />
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto navbar-center" id="mySidenav">
                    <li class="nav-item active">
                        <a href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#features" class="nav-link">Features</a>
                    </li>
                    <li class="nav-item">
                        <a href="#information" class="nav-link">Information</a>
                    </li>
                    <li class="nav-item">
                        <a href="#our_team" class="nav-link">Our Team</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- home start -->
    <section class="bg-home bg-gradient" id="home">
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-sm-6">
                            <div class="home-title text-white">
                                <h5 class="mb-3 text-white-50">Discover Proferan Today</h5>
                                <h2 class="mb-4">Make your Financial Report with Proferan</h2>
                                <p class="text-white-50 home-desc font-16 mb-5">Proferan is a WebApp that helps MSMEs to create simple financial reports. Proferan also provides education to MSMEs about accounting applications.</p>
                                <div class="watch-video mt-5">
                                    <a href="{{ route('auth.login.view') }}" class="btn btn-custom mr-4">Get Started <i class="mdi mdi-chevron-right ml-1"></i></a>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-5 offset-lg-1 col-sm-6">
                            <div class="home-img mo-mt-20">
                                <img src="{{ asset('assets/landing/images/home-img.png') }}" alt="" class="img-fluid mx-auto d-block">
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                </div>
                <!-- end container-fluid -->
            </div>
        </div>
    </section>
    <!-- home end -->

    <!-- features start -->
    <section class="features" id="features">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-pills nav-justified features-tab mb-5" id="pills-tab" role="tablist">
                        @foreach($adminLain as $index => $item)
                        <li class="nav-item">
                            <a class="nav-link {{ $index === 0 ? 'active' : '' }}" id="pills-{{ $item->id }}-tab" data-toggle="pill" href="#pills-{{ $item->id }}" role="tab" aria-controls="pills-{{ $item->id }}" aria-selected="{{ $index === 0 ? 'true' : 'false' }}">
                                <div class="clearfix">
                                    <div class="features-icon float-right">
                                        <i class="pe-7s-{{ $item->id === 1 ? 'notebook' : ($item->id === 2 ? 'edit' : 'headphones') }} h1"></i>
                                    </div>
                                    <div class="d-none d-lg-block mr-4">
                                        <h5>{{ $item->judul }}</h5>
                                        <p>{{ $item->subjudul }}</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        @foreach($adminLain as $index => $item)
                        <div class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}" id="pills-{{ $item->id }}" role="tabpanel" aria-labelledby="pills-{{ $item->id }}-tab">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-4 col-sm-6">
                                    <div>
                                        <img src="{{ asset('assets/landing/images/features-img/img-' . ($index + 1) . '.png') }}" alt="" class="img-fluid mx-auto d-block">
                                    </div>
                                </div>
                                <div class="col-lg-6 offset-lg-1">
                                    <div>
                                        <div class="feature-icon mb-4">
                                            <i class="pe-7s-{{ $item->id === 1 ? 'notebook' : ($item->id === 2 ? 'edit' : 'headphones') }} h1 text-primary"></i>
                                        </div>
                                        <h5 class="mb-3">{{ $item->judul }}</h5>
                                        <p class="text-muted">{{ $item->keterangan }}</p>
                                        @if($item->file)
                                        <div class="mt-4">
                                            <a href="{{ Storage::url($item->file) }}" class="btn btn-custom" download>Download<i class="mdi mdi-cloud-download ml-1"></i></a>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                        @endforeach
                    </div>
                    <!-- end tab-content -->
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </section>
    <!-- features end -->

    <!-- Information start -->
    <section class="section" id="information">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title text-center mb-4">
                        <h6 class="text-primary small-title">Information</h6>
                        <h4>Available Information</h4>
                        <p>&nbsp;</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="carouselExampleCaptions" class="carousel slide col-12" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach($berita as $key => $item)
                        <li data-target="#carouselExampleCaptions" data-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"></li>
                        @endforeach
                    </ol>
                    <div class="carousel-inner">
                        @foreach($berita as $key => $item)
                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                            <div class="image-container">
                                <div class="shadow-overlay"></div>
                                <img src="{{ $item->gambar }}" class="d-block w-100" alt="{{ $item->judul }}">
                            </div>
                            <div class="carousel-caption d-none d-md-block bg-dark">
                                <h5>{{ $item->judul }}</h5>
                                <p>{{ $item->keterangan }}</p>
                                <a href="{{ $item->link }}" class="btn btn-primary" target="_blank">Klik Disini</a>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </section>
    <!-- Information end -->

    <!-- Our Team start -->
    <section class="section bg-light" id="our_team">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title text-center mb-4">
                        <h6 class="text-primary small-title">Our Team</h6>
                        <h4>Our Awesome Proferan Team Creative</h4>
                        <hr class="text-muted">
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="testi-box p-4 bg-white mt-4 text-center">
                        <p class="text-muted mb-4">" The designer of this theme delivered a quality product. I am not a front-end developer and I hate when the theme I download has glitches or needs minor tweaks here and there. This worked for my needs just out of the boxes. Also, it is fast and elegant."</p>
                        <div class="testi-img mb-4">
                            <img src="{{ asset('assets/landing/images/testi/img-1.png') }}" alt="" class="rounded-circle img-thumbnail">
                        </div>
                        <p class="text-muted mb-1"> - Project Manager</p>
                        <h5 class="font-18">Andreas Kevin</h5>

                        <div class="testi-icon">
                            <i class="mdi mdi-format-quote-open display-2"></i>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testi-box p-4 bg-white mt-4 text-center">
                        <p class="text-muted mb-4">" Extremely well designed and the documentation is very well done. Super happy with the purchase and definitely recommend this! "</p>
                        <div class="testi-img mb-4">
                            <img src="{{ asset('assets/landing/images/testi/img-2.png') }}" alt="" class="rounded-circle img-thumbnail">
                        </div>
                        <p class="text-muted mb-1"> - Fullstack Developer</p>
                        <h5 class="font-18">Feryandi</h5>

                        <div class="testi-icon">
                            <i class="mdi mdi-format-quote-open display-2"></i>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </section>
    <!-- Our Team end -->

    <!-- contact start -->
    <section class="section" id="contact">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title text-center mb-5">
                        <h6 class="text-primary small-title">Contact</h6>
                        <h4>Have any Questions ?</h4>
                        <p class="text-muted">let us know your question</p>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-4">
                    <div class="get-in-touch">
                        <h5>Get in touch</h5>
                        <p class="text-muted mb-5">You can contact us on</p>

                        <div class="mb-3">
                            <div class="get-touch-icon float-left mr-3">
                                <i class="pe-7s-mail h2 text-primary"></i>
                            </div>
                            <div class="overflow-hidden">
                                <h5 class="font-16 mb-0">E-mail</h5>
                                <p class="text-muted">example@gmail.com</p>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="get-touch-icon float-left mr-3">
                                <i class="pe-7s-phone h2 text-primary"></i>
                            </div>
                            <div class="overflow-hidden">
                                <h5 class="font-16 mb-0">Phone</h5>
                                <p class="text-muted">012-345-6789</p>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="get-touch-icon float-left mr-3">
                                <i class="pe-7s-map-marker h2 text-primary"></i>
                            </div>
                            <div class="overflow-hidden">
                                <h5 class="font-16 mb-0">Address</h5>
                                <p class="text-muted">20 Rollins Road Cotesfield, NE 68829</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="custom-form bg-white">
                        <div id="message"></div>
                        <form method="post" action="#" name="contact-form" id="contact-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input name="name" id="name" type="text" class="form-control" placeholder="Enter your name...">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input name="email" id="email" type="email" class="form-control" placeholder="Enter your email...">
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input name="subject" id="subject" type="text" class="form-control" placeholder="Enter Subject...">
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="comments">Message</label>
                                        <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Enter your message..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-lg-12 text-right">
                                    <input type="submit" id="submit" name="send" class="submitBnt btn btn-custom" value="Send Message">
                                    <div id="simple-msg"></div>
                                </div>
                            </div>
                            <!-- end row -->
                        </form>
                    </div>
                    <!-- end custom-form -->

                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </section>
    <!-- contact end -->

    <!-- footer start -->
    <footer class="footer bg-dark">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="text-center">
                        <div class="footer-logo mb-3">
                            <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="20">
                        </div>
                        <ul class="list-inline footer-list text-center mt-5">
                            <li class="list-inline-item"><a href="#">Home</a></li>
                            <li class="list-inline-item"><a href="#features">Features</a></li>
                            <li class="list-inline-item"><a href="#information">Information</a></li>
                            <li class="list-inline-item"><a href="#our_team">Our Team</a></li>
                            <li class="list-inline-item"><a href="#contact">Contact</a></li>
                        </ul>
                        <ul class="list-inline social-links mb-4 mt-5">
                            <li class="list-inline-item"><a href="#"><i class="mdi mdi-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="mdi mdi-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="mdi mdi-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="mdi mdi-google-plus"></i></a></li>
                        </ul>
                        <p class="text-white-50 mb-4">
                            Copyright © 2024 Proferan Pancur Kasih. All rights reserved | Made with &#10084; by Proferan Team
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </footer>
    <!-- footer end -->

    <!-- Back to top -->
    <a href="#" class="back-to-top" id="back-to-top"> <i class="mdi mdi-chevron-up"> </i> </a>


    <!-- javascript -->
    <script src="{{ asset('assets/landing/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/landing/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/landing/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/landing/js/scrollspy.min.js') }}"></script>

    <!-- Magnific Popup -->
    <script src="{{ asset('assets/landing/js/jquery.magnific-popup.min.js') }}"></script>

    <!-- custom js -->
    <script src="{{ asset('assets/landing/js/app.js') }}"></script>

</body>

</html>