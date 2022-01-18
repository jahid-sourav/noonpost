@extends('front.master')
@section('title')
লগইন
@endsection
@section('nav-item')
<ul class="navbar-nav mx-auto">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}"> হোম </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('contact') }}"> যোগাযোগ </a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="{{ route('login') }}"> লগইন </a>
    </li>
</ul>
@endsection
@section('body')
<section class="section pt-55 mb-50">
    <div class="container">
        <div class="sign widget ">
            <div class="section-title">
                <h5>লগইন</h5>
            </div>
            <form  action="{{ route('login') }}" class="sign-form widget-form " method="POST">
                @csrf
                    <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email*" name="email" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password*" name="password" required>
                </div>
                <div class="sign-controls form-group">
                    <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="rememberMe">
                        <label class="custom-control-label" for="rememberMe">Remember Me</label>
                    </div>
                    <a href="{{ route('password.request') }}" class="btn-link  ml-auto">Forgot Password?</a>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn-custom">Login</button>
                </div>

                <p class="form-group text-center">Don't have an account? <a href="{{ route('register') }}" class="btn-link">Create One</a> </p>
            </form>
        </div>
    </div>
</section>
@endsection
