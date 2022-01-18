@extends('admin.master')
@section('title')
Category Edit
@endsection
@section('body')
<section class="pt-5 mt-5">
    <div class="container-fluid">
        <div class="text-center mb-4">
            <h5>Category Edit</h5>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form action="{{ route('category-updated') }}" method="POST">
                    @csrf
                    <input type="hidden" name="category_id" value="{{ $category->id }}">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="category-name" class="form-label">Category name</label>
                                <input type="text" class="form-control" name="name" id="category-name" placeholder="Write Category Name" maxlength="16" value="{{ $category->name }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <input type="submit" value="Update Category" class="btn btn-secondary waves-effect waves-light">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
