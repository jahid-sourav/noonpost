@extends('admin.master')
@section('title')
Blog Edit
@endsection
@section('body')
<section class="pt-5 mt-5">
    <div class="container-fluid">
        <div class="text-center mb-4">
            <h5>Blog Edit</h5>
        </div>
        <div class="row justify-content-center" style="padding-bottom:100px;">
            <div class="col-lg-6">
                <form action="{{ route('blog-updated') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="category" class="form-label">Blog Category</label>
                                <select name="category_id" id="category" class="form-select" required>
                                    <option value="">ক্যাটেগরি সিলেক্ট করুন</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="title" class="form-label">Blog Title</label>
                                <input type="text" name="title" value="{{ $blog->title }}" id="title" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="description" class="form-label">Blog Description</label>
                                <textarea name="description" id="description" class="form-control">{{ $blog->description }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="author" class="form-label">Author Name</label>
                                <input type="text" name="author" value="{{ $blog->author }}" id="author" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="image" class="form-label">Blog Image</label>
                                <img src="{{ asset($blog->image) }}" alt="image" style="width: 100px; height:100px;" class="d-block mb-3">
                                <input type="file" name="image" id="image" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <input type="submit" value="Update Blog" class="btn btn-secondary waves-effect waves-light">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
