
@extends('layouts.AuthLayout')
@section('title', 'Create an Account')
@section('content')
    <div class="app-content style-3 pb-32 signUp-area">
        <div class="tf-container">
            <form class="mt-24" action="{{route('register')}}" method="POST">
                @csrf
                <p class="body-6 text-black-5">Give creadential to sign in your account</p>
                <fieldset class="input-icon mt-20">
                    <span class="icon icon-user"></span>
                    <input type="text" placeholder="Type your username" name="name" class="form-control" required>
                </fieldset>
                <fieldset class="input-icon mt-16">
                    <span class="icon icon-mail"></span>
                    <input type="text" placeholder="Type your email" name="email" class="form-control" required>
                </fieldset>
                <fieldset class="mt-16 input-icon">
                    <div class="box-view-hide">
                        <span class="icon icon-lock"></span>
                        <input type="password" placeholder="Type your password" name="password" class="form-control password-field" required>
                        <div class="show-pass">
                            <span class="icon-pass icon-view"></span>
                            <span class="icon-pass icon-hide"></span>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="cb-signup mt-20">
                    <input type="checkbox" class="tf-checkbox" id="cb-ip" required> 
                    <label for="cb-ip">I agree to the company <span class="text-primary">Term of Service</span> and <span class="text-primary">Privacy Policy</span> </label>
                </fieldset>
                <button class="mt-24 tf-btn primary" type="submit">Sign Up</button>
            </form>
            <div class="auth-line body-6">or continue with</div>
            <div class="d-flex gap-16 justify-content-center">
                <a href="index.html" class="btn-social-icon">
                    <img class="img-icon" src="images/logo/fb.png" alt="img">
                </a>
                <a href="index.html" class="btn-social-icon">
                    <img class="img-icon" src="images/logo/google.png" alt="img">
                </a>
                <a href="index.html" class="btn-social-icon">
                    <img class="img-icon" src="images/logo/apple.png" alt="img">
                </a>
            </div>
            
            <p class="mt-60 text-center body-2 fw-5 text-black-5"> have account?<a href="{{route('login')}}" class="text-primary fw-7 body-2">sign In</a></p>
        </div>
    </div>
@endsection



