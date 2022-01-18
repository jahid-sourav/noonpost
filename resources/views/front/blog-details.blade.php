@extends('front.master')
@section('title')
ব্লগের বিবরণ
@endsection
@section('nav-item')
<ul class="navbar-nav mx-auto">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}"> হোম </a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"> ক্যাটেগরি </a>
        <ul class="dropdown-menu fade-up">
            <li>
                @foreach ($categories as $category)
                    <a class="dropdown-item mb-2" href="{{ route('category', ['id' => $category->id]) }}">{{ $category->name }}</a>
                @endforeach
            </li>
        </ul>
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
<section class="section pt-55 ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 mb-20">
                <!--Post-single-->
                <div class="post-single">
                    <div class="post-single-image">
                        <img src="{{ asset($blog->image) }}" alt="Blog Image" class="w-100">
                    </div>
                    <div class="post-single-content">
                        <a href="{{ route('category', ['id' => $blog->category->id]) }}" class="categorie">{{ $blog->category->name}}</a>
                        <h4>{{ $blog->title }}</h4>
                        <div class="post-single-info">
                            <p class="mb-0"><strong>{{ $blog->author }}</strong></p>
                        </div>
                    </div>

                    <div class="post-single-body">
                        <p>{{ $blog->description }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 max-width">
                <div class="widget">
                    <div class="section-title">
                        <h5>Instagram</h5>
                    </div>
                    <ul class="widget-instagram">
                        <li>
                            <a class="image" href="javascript:void(0)">
                                <img src="{{ asset('/') }}assets/img/instagram/1.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a class="image" href="javascript:void(0)">
                                <img src="{{ asset('/') }}assets/img/instagram/2.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a class="image" href="javascript:void(0)">
                                <img src="{{ asset('/') }}assets/img/instagram/3.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a class="image" href="javascript:void(0)">
                                <img src="{{ asset('/') }}assets/img/instagram/4.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a class="image" href="javascript:void(0)">
                                <img src="{{ asset('/') }}assets/img/instagram/5.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a class="image" href="javascript:void(0)">
                                <img src="{{ asset('/') }}assets/img/instagram/6.jpg" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
