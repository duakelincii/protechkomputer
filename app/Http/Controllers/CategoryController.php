<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::get();
        return view('admin/category',['category'=>$category]);
    }

    public function store(Request $req)
    {
        $req->validate([
            'category_name'=> 'required',
        ]);
        $category = new Category;
        $category->category_name = $req->category_name;
        $category->save();
        return redirect('admin/category')->with('successadd','New Category added');
    }

    public function createCategory()
    {
        return view('admin/newcategory');
    }
    public function editCategory($id)
    {
        $category = Category::find($id);
        return view('admin/editcategory',compact('category'));
    }

    public function updateCategory(Request $req)
    {
        $req->validate([
            'category_name'=> 'required',
        ]);
        $category = Category::find($req->id);
        $category->category_name = $req->category_name;
        $category->save();
        return redirect('admin/category')->with('successupdate','Category updated successfully');
    }

}
