@extends('front.master')
@section('title')
হোম
@endsection
@section('nav-item')
<ul class="navbar-nav mx-auto">
    <li class="nav-item">
        <a class="nav-link active" href="{{ route('home') }}"> হোম </a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link  dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"> ক্যাটেগরি </a>
        <ul class="dropdown-menu fade-up">
            <li>
                @foreach ($categories as $category)
                    <a class="dropdown-item mt-2" href="{{ route('category', ['id' => $category->id]) }}">{{ $category->name }}</a>
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
<section class="section pt-85">
    <div class="container-fluid">
        <div class="pb-5">
            <div class="section-title">
                <h5>সাম্প্রতিক ব্লগসমূহ</h5>
            </div>
        </div>
        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-lg-4 col-md-6">
                <div class="post-card">
                    <div class="post-card-image">
                        <a href="{{ route('blog-details', ['id' => $blog->id]) }}" class="d-block">
                            <img src="{{ asset($blog->image) }}" alt="Blog Image" class="w-100" style="max-height: 190px; object-fit:cover;">
                        </a>
                    </div>
                    <div class="post-card-content">
                        <a href="{{ route('category', ['id' => $blog->category->id]) }}" class="categorie">{{ $blog->category->name}}</a>
                        <h5>
                            <a href="{{ route('blog-details', ['id' => $blog->id]) }}" class="d-block">{{Str::limit($blog->title, 28)}}</a>
                        </h5>
                        <p class="mb-3">{{Str::limit($blog->description, 300)}}</p>
                        <div class="post-card-info">
                            <ul class="list-inline justify-content-center">
                                <li>
                                    <h6 class="mb-0">লেখক-</h6>
                                </li>
                                <li class="ml-2">
                                    <p class="mb-0"><strong>{{ $blog->author }}</strong></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
