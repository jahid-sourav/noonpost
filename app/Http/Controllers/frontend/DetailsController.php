<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    //
    protected $blog;
    public function index($id)
    {
        $this->blog = Blog::find($id);
        return view('front.blog-details', ['blog' => $this->blog]);
    }
}


