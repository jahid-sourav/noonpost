<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    protected $blogs;
    protected $category;
    public function index($id)
    {
        $this->category = Category::findorFail($id);
        $this->blogs = Blog::where('category_id', $id)->get();
        return view('front.category', ['blogs' => $this->blogs, 'category' => $this->category]);
    }
}
