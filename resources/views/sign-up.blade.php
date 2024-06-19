@extends('site-layout')

@section('content')
    <!-- Header -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <header id="header" class="ex-2-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Sign Up</h1>
                   <p>Fill out the form below and start using Portal Pix Today!. Already signed up? Then just <a class="white" href="log-in">Log In</a></p> 
                    <!-- Sign Up Form -->
                    <div class="form-container">
                        <form id="signUpForm" data-toggle="validator" data-focus="false">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control-input" id="fname" required>
                                <label class="label-control" for="fname">First Name</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-input" id="lname" required>
                                <label class="label-control" for="lname">Last Name</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-input" id="company" required>
                                <label class="label-control" for="company">Legal Company Name</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group input-group-prepend md-3">
                                <input type="text" class="form-control-input" id="subdomain" required>
                                <label class="label-control" for="subdomain">Choose your domain</label>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">.portalpix.com</span>
                                  </div>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control-input" id="email" required>
                                <label class="label-control" for="email">Email</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control-input" id="password" required>
                                <label class="label-control" for="password1">Password</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control-input" id="password_confirmation" required>
                                <label class="label-control" for="password2">Retype Password</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control-submit-button">SIGN UP</button>
                            </div>
                            <div class="form-message">
                                <div id="smsgSubmit" class="h3 text-center hidden"></div>
                            </div>
                            
                        </form>
                    </div> <!-- end of form container -->
                    <!-- end of sign up form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->

@endsection