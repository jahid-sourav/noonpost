<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //

    protected $categories;
    protected $blogs;
    protected $blog;
    public function index()
    {
        $this->categories = Category::all();
        return view('admin.blog-create', ['categories' => $this->categories]);
    }
    public function blogCreated(Request $request)
    {
        Blog::blogCreated($request);
        return redirect()->back()->with('message', 'Blog Created Successfully!');
    }
    public function blogManage()
    {
        $this->blogs = Blog::all();
        return view('admin.blog-manage', ['blogs' => $this->blogs]);
    }
    public function blogEdit($id)
    {
        $this->categories = Category::all();
        $this->blog = Blog::find($id);
        return view('admin.blog-edit', ['blog' => $this->blog, 'categories' => $this->categories]);
    }
    public function blogUpdated(Request $request)
    {
        Blog::blogupdated($request);
        return redirect('blog-manage')->with('message', 'Blog Updated Successfully!');
    }
    public function blogDelete($id)
    {
        $this->blog = Blog::find($id);
        if(file_exists($this->blog->image)){
            unlink($this->blog->image);
        }
        $this->blog->delete();
        return redirect()->back()->with('message', 'Blog Deleted Successfully!');
    }
}
