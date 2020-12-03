<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carousel;
class CarouselController extends Controller
{

    public function index()
    {
        $carousel = Carousel::get();
        return view('admin/carousel',['carousel'=>$carousel]);
    }

    public function create()
    {
        return view('admin/newcarousel');
    }


    public function store(Request $req)
    {
        $image = $req->file('carousel_url');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);
        $carousel = new Carousel;
        $carousel->carousel_url = $imageName;
        $carousel->carousel_big = $req->carousel_big;
        $carousel->carousel_desc = $req->carousel_desc;

        $carousel->save();
        return redirect('admin/carousel')->with('successadd','New Carousel added successfully');
    }

    public function editCarousel($id)
    {
        $carousel = Carousel::find($id);
        return view('admin/editcarousel',compact('carousel'));
    }


    public function updateCarousel(Request $req)
    {
        $carousel = Carousel::find($req->id);
        $carousel->carousel_big = $req->carousel_big;
        $carousel->carousel_desc = $req->carousel_desc;
        $carousel->save();
        return redirect('admin/carousel')->with('successupdate','Carousel updated successfully');
    }

    public function editCarouselImage($id)
    {
        $carousel = Carousel::find($id);
        return view('admin/editcarouselimage',compact('carousel'));
    }

    public function updateCarouselImage(Request $req)
    {
        $carousel = Carousel::find($req->id);
        unlink(public_path('images').'/'.$carousel->carousel_url);
        $image = $req->file('carousel_url');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);
        
        $carousel->carousel_url = $imageName;
        $carousel->save();
        return redirect('admin/carousel')->with('successupdateimage','Carousel image updated successfully');
    }
    public function deleteCarousel($id)
    {
        $carousel = Carousel::find($id);
        unlink(public_path('images').'/'.$carousel->carousel_url);
        $carousel->delete();
        return redirect('admin/carousel')->with('successdelete','Carousel deleted successfully');
    }
}
