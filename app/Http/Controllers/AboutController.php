<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Vision;
use App\Models\Mission;
use App\Models\Keyword;
use App\Models\AboutHome;
class AboutController extends Controller
{

    public function index(Request $req)
    {
        $about = About::get();
        return view('admin/about-us',['about'=>$about]);
    }

    public function viewAboutHome(Request $req)
    {
        $abouthome = AboutHome::get();
        return view('admin/abouthome',['abouthome'=>$abouthome]);
    }

    public function editAboutHome($id)
    {
        $abouthome = AboutHome::find($id);
        return view('admin/editabouthome-text',compact('abouthome'));
    }
    
    public function editAboutHomeImage($id)
    {
        $abouthome = AboutHome::find($id);
        return view('admin/editabouthome-image',compact('abouthome'));
    }

    public function updateAboutHome(Request $req)
    {
        $req->validate([
            'abouthome_text'=> 'required',
        ]);
        $abouthome = AboutHome::find($req->id);
        $abouthome->abouthome_text = $req->abouthome_text;
        $abouthome->save();
        return redirect('admin/about-home')->with('successabouthome','Text updated successfully');
    }
    
    public function updateAboutHomeImage(Request $req)
    {
        $req->validate([
            'abouthome_image' => 'required|mimes:jpg,jpeg,png |max:2048'
        ]);
        $abouthome = AboutHome::find($req->id);
        unlink(public_path('images').'/'.$abouthome->abouthome_image);
        $image = $req->file('abouthome_image');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);
        
        $abouthome->abouthome_image = $imageName;
        $abouthome->save();
        return redirect('admin/about-home')->with('successaboutimage','Image updated successfully');
    }

    public function editAbout($id)
    {
        $about = About::find($id);
        return view('admin/editabout-text',compact('about'));
    }

    public function editAboutImage($id)
    {
        $about = About::find($id);
        return view('admin/editaboutimage',compact('about'));
    }

    public function updateAboutImage(Request $req)
    {
        $req->validate([
            'about_us_image' => 'required|mimes:jpg,jpeg,png |max:2048'
        ]);
        $about = About::find($req->id);
        unlink(public_path('images').'/'.$about->about_us_image);
        $image = $req->file('about_us_image');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);
        
        $about->about_us_image = $imageName;
        $about->save();
        return redirect('admin/about-us')->with('successimage','Image updated successfully');
    }

    public function updateAbout(Request $req)
    {
        $req->validate([
            'about_us_text'=> 'required',
        ]);
        $about = About::find($req->id);
        $about->about_us_text = $req->about_us_text;
        $about->save();
        return redirect('admin/about-us')->with('successtext','Text updated successfully');
    }



    public function viewVision(Request $req)
    {
        $vision = Vision::get();
        return view('admin/vision',['vision'=>$vision]);
    }

    public function createVision()
    {
        return view('admin/newVision');
    }

    public function createMission()
    {
        return view('admin/newMission');
    }

    public function viewMission(Request $req)
    {
        $mission = Mission::get();
        return view('admin/mission',['mission'=>$mission]);
    }

    public function newVision(Request $req)
    {
        $req->validate([
            'vision'=> 'required',
        ]);
        $vision = new vision;
        $vision->vision = $req->vision;
        $vision->save();
        return redirect('admin/vision')->with('successadd','New Vision successfully added');
    }

    public function newMission(Request $req)
    {
        $req->validate([
            'mission'=> 'required',
        ]);
        $mission = new mission;
        $mission->mission = $req->mission;
        $mission->save();
        return redirect('admin/mission')->with('successadd','New Mission successfully added');
    }
    
    public function editVision($id)
    {
        $vision = Vision::find($id);
        return view('admin/editvision',compact('vision'));
    }
    public function editMission($id)
    {
        $mission = Mission::find($id);
        return view('admin/editmission',compact('mission'));
    }
    public function updateVision(Request $req)
    {
        $req->validate([
            'vision'=> 'required',
        ]);
        $vision = Vision::find($req->id);
        $vision->vision = $req->vision;
        $vision->save();
        return redirect('admin/vision')->with('successupdate','Vision Successfully Updated');
    }
    public function updateMission(Request $req)
    {
        $req->validate([
            'mission'=> 'required',
        ]);
        $mission = Mission::find($req->id);
        $mission->mission = $req->mission;
        $mission->save();
        return redirect('admin/mission')->with('successupdate','Mission Successfully Updated');
    }
    public function deleteVision($id)
    {
        $vision = Vision::find($id);
        $vision->delete();
        return redirect('admin/vision')->with('successdelete','Vision Successfully Deleted');
    }
    
    public function deleteMission($id)
    {
        $mission = Mission::find($id);
        $mission->delete();
        return redirect('admin/mission')->with('successdelete','Mission Successfully Deleted');
    }

    public function keyword()
    {
        $datas = Keyword::get();
        return view('admin.keyword',compact('datas'));
    }

    public function editkeyword($id)
    {
        $data = Keyword::find($id);
        return view('admin.editkeywords',compact('data'));
    }

    public function updatekeyword(Request $request)
    {
        $request->validate([
            'text_key'   => 'required'
        ]);

        $keyword = Keyword::find($request->id);
        $keyword->text_key = $request->text_key;
        $keyword->save();
        return redirect('admin/keyword')->with('successkeyword','Keyword updated successfully');
    }

}
