@extends('site-layout')

@section('content')
    <!-- Header -->
    <header id="header" class="ex-2-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Log In</h1>
                   <p>You don't have a password? Then please <a class="white" href="sign-up">Sign Up</a></p> 
                    <!-- Sign Up Form -->
                    <div class="form-container">
                        <form id="logInForm" method="post" data-toggle="validator" data-focus="false">
                            @csrf

                            <div class="form-group">
                                <input type="email" class="form-control-input" id="lemail" required>
                                <label class="label-control" for="lemail">Email</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control-input" id="lpassword" required>
                                <label class="label-control" for="lpassword">Password</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">

                                @if($errors->any())
                                <p style="color:red"> {{ implode('', $errors->all(':message')) }}</p>
                                @endif


                                <button type="submit" class="form-control-submit-button">LOG IN</button>
                            </div>
                            <div class="form-message">
                                <div id="lmsgSubmit" class="h3 text-center hidden"></div>
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