<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    public function index()
    {

        $data = DB::table('products')
                ->join('categories','products.category_id','=','categories.id')
                ->select('products.*','categories.category_name')
                ->get();
        return view('admin/product',['data'=>$data]);
    }

    public function create()
    {
        $category = Category::get();
        return view('admin/newproduct',['category'=>$category]);
    }


    public function store(Request $req)
    {
        $req->validate([
            'product_name'=> 'required',
            'category_id' => 'required',
            'product_description' => 'required',
            'product_image' => 'required|mimes:jpg,jpeg,png |max:2048'
        ]);
        $category = Category::get();
        $image = $req->file('product_image');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);
        $product = new Product;
        $product->product_image = $imageName;
        $product->product_name = $req->product_name;
        $product->product_description = $req->product_description;
        $product->category_id = $req->category_id;

        $product->save();
        return redirect('admin/product')->with('successadd','Product added successfully');
    }

    public function editProduct($id)
    {
        $category = Category::get();
        $product = Product::find($id);
        return view('admin/editproduct',compact('product','category'));
    }


    public function updateProduct(Request $req)
    {
        $req->validate([
            'product_name'=> 'required',
            'category_id' => 'required',
            'product_description' => 'required',
        ]);
        $category = Category::get();
        $product = Product::find($req->id);
        $product->product_name = $req->product_name;
        $product->product_description = $req->product_description;
        $product->category_id = $req->category_id;
        $product->save();
        return redirect('admin/product')->with('successupdate','Product updated successfully');
    }

    public function editProductImage($id)
    {
        $product = Product::find($id);
        return view('admin/editproductimage',compact('product'));
    }

    public function updateProductImage(Request $req)
    {
        $product = Product::find($req->id);
        unlink(public_path('images').'/'.$product->product_image);
        $image = $req->file('product_image');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);
        
        $product->product_image = $imageName;
        $product->save();
        return redirect('admin/product')->with('successupdateimage','Product image updated successfully');
    }
    public function deleteProduct($id)
    {
        $product = Product::find($id);
        unlink(public_path('images').'/'.$product->product_image);
        $product->delete();
        return redirect('admin/product')->with('successdelete','Product deleted successfully');
    }
}
