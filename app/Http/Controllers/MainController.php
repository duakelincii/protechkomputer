<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carousel;
use App\Models\Client;
use App\Models\About;
use App\Models\Vision;
use App\Models\Mission;
use App\Models\Product;
use App\Models\Contact;
use App\Models\Category;
use App\Models\AboutHome;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    function index()
    {
        $product = Product::get();
        $about = About::get();
        $client = Client::get();
        $carousel = Carousel::get();
        $abouthome = AboutHome::get();
        $customer = Customer::get();
        return view('main/home',['carousel'=>$carousel,'client'=>$client,'about'=>$about,'abouthome'=>$abouthome,'product'=>$product,'customer'=>$customer]);
    }
    function about()
    {
        $client = Client::get();
        $about = About::get();
        $vision = Vision::get();
        $mission = Mission::get();

        return view('main/about',['client'=>$client,'about'=>$about,'vision'=>$vision,'mission'=>$mission]);
    }
    function product()
    {
        $client = Client::get();
        $category = Category::get();
        $data = DB::table('products')
                ->join('categories','products.category_id','=','categories.id')
                ->select('products.*','categories.category_name')
                ->paginate(6);
        return view('main/product',['client'=>$client, 'data'=>$data,'category'=>$category]);
    }

    
}
