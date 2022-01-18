@extends('front.master')
@section('title')
সার্চ রেজাল্ট
@endsection
@section('nav-item')
<ul class="navbar-nav mx-auto">
    <li class="nav-item">
        <a class="nav-link active" href="{{ route('home') }}"> হোম </a>
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
<section class="section pt-85">
    <div class="container-fluid">
        <div class="pb-5">
            <div class="section-title">
                <h5>সার্চ রেজাল্টসমূহ</h5>
            </div>
        </div>
        <div class="row">

        </div>
    </div>
</section>
@endsection
