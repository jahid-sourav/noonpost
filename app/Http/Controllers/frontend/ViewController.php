<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    protected $blogs;
    public function index()
    {
        $this->blogs =  Blog::all();
        return view('front.home', ['blogs' => $this->blogs]);
    }
}
