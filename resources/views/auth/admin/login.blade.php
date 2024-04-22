@extends('auth.templates.main')
@section('title')
    Log in
@endsection
@section('content')
    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="text-center">
                        <a href="index.html" class="logo">
                            <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="22" class="logo-light mx-auto">
                            <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="22" class="logo-dark mx-auto">
                        </a>
                        <p class="text-muted mt-2 mb-4">Professional Federation Accounting</p>
                    </div>
                    <div class="card">

                        <div class="card-body p-4">
                            
                            <div class="text-center mb-4">
                                <h4 class="text-uppercase mt-0">Admin Sign In</h4>
                            </div>

                            <form action="#">

                                <div class="form-group mb-3">
                                    <label for="email">Email address</label>
                                    <input class="form-control" type="email" id="email" required placeholder="Enter your email" name="email">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="password">Password</label>
                                    <input class="form-control" type="password" required id="password" placeholder="Enter your password" name="password">
                                </div>

                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-primary btn-block" type="submit"> Log In </button>
                                </div>

                            </form>
                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
@endsection