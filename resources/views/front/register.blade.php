@extends('front.master')
@section('title')
সাইন আপ
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
        <a class="nav-link" href="{{ route('login') }}"> লগইন </a>
    </li>
</ul>
@endsection
@section('body')
<section class="section pt-55 mb-50">
    <div class="container-fluid">
        <div class="sign widget">
            <div class="section-title">
                <h5>সাইন আপ</h5>
            </div>
            <form method="POST" action="{{ route('register') }}" class="sign-form widget-form ">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name*" name="name" required="required">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email Address*" name="email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password*" name="password">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Confirm Password*" name="password_confirmation">
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn-custom">Sign Up</button>
                </div>
                <div class="form-group">
                    <p class="form-group text-center">Already have an account? <a href="{{ route('login') }}" class="btn-link">Login</a> </p>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
