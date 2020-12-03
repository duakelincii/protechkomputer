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
        $req->validate([
            'heading'=> 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png |max:2048'
        ]);
        $image = $req->file('image');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);
        $carousel = new Carousel;
        $carousel->image = $imageName;
        $carousel->heading = $req->heading;
        $carousel->description = $req->description;

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
        $req->validate([
            'heading'=> 'required',
            'description' => 'required',
        ]);
        $carousel = Carousel::find($req->id);
        $carousel->heading = $req->heading;
        $carousel->description = $req->description;
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
        $req->validate([
            'image' => 'required|mimes:jpg,jpeg,png |max:2048'
        ]);
        $carousel = Carousel::find($req->id);
        unlink(public_path('images').'/'.$carousel->image);
        $image = $req->file('image');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);
        
        $carousel->image = $imageName;
        $carousel->save();
        return redirect('admin/carousel')->with('successupdateimage','Carousel image updated successfully');
    }
    public function deleteCarousel($id)
    {
        $carousel = Carousel::find($id);
        unlink(public_path('images').'/'.$carousel->image);
        $carousel->delete();
        return redirect('admin/carousel')->with('successdelete','Carousel deleted successfully');
    }
}
