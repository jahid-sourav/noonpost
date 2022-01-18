<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    protected $categories;
    protected $category;

    public function index()
    {
        return view('admin.category-create');
    }

    public function categoryCreated(Request $request)
    {
        Category::categoryCreated($request);
        return redirect()->back()->with('message', 'Category Created Successfully!');
    }

    public function categoryManage()
    {
        $this->categories = Category::all();
        return view('admin.category-manage', ['categories' => $this->categories]);
    }

    public function categoryEdit($id)
    {
        $this->category = Category::find($id);
        return view('admin.category-edit', ['category' => $this->category]);
    }

    public function categoryUpdated(Request $request)
    {
        Category::categoryUpdated($request);
        return redirect('category-manage')->with('message', 'Category Updated Successfully!');
    }

    public function categoryDelete($id)
    {
        $this->category = Category::find($id);
        $this->category->delete();
        return redirect()->back()->with('message', 'Category Deleted Successfully!');
    }
}
