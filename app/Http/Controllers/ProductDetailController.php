<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
class ProductDetailController extends Controller
{
    public function displayProduct($id)
    {
        $product = Product::find($id);
        $related = DB::table('products')
                -> where('category_id',$product->category_id)
                ->where('id','!=',$id)
                ->get();
        return view('main/productdetails',compact('product','related'));
    }
}
// public function displayProduct($id)
// {
//     $category = Category::get();
//     $product = Product::find($id);
//     return view('admin/productdetails',compact('product','category'));
// }