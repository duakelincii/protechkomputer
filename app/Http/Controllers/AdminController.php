<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    function login()
    {
        return view('admin/login');
    }
    function dashboard(Request $req)
    {
        return view('admin/dashboard');
    }
    function register()
    {
        return view('admin/register');
    }
    function registerAdmin(Request $req)
    {
        $admin = new Admin;
        $admin->admin_name = $req->admin_name;
        $admin->admin_email = $req->admin_email;
        $admin->admin_password = Hash::make($req->input('admin_password'));
        $admin->save();
        return redirect('admin');
    }
    function loginAdmin(Request $req)
    {

        //arti dari first() itu bakal return only 1 record
        $admin= Admin::where(['admin_email'=>$req->admin_email])->first();
        //Perlu tambah flash session biar misal kalo username password salah muncul errornya
        if(!$admin || !Hash::check($req->admin_password,$admin->admin_password))
        {
            return redirect('admin')->with('error','Username/Password is incorrect');
        }
        else {
            $req->session()->put('admin',$admin);
            return redirect('admin/dashboard');
        }
    }
    function table(){
        return view('admin/table');
    }

    function editProfile(Request $req)
    {
        return view('admin/editprofile');
    }
    function updateProfile(Request $req)
    {
        $req->validate([
            'admin_name'=> 'required',
            'admin_email' => 'required',
        ]);
        $admin = Admin::find($req->id);
        $admin->admin_name = $req->admin_name;
        $admin->admin_email = $req->admin_email;
        $admin->save();
        $req->session()->put('admin',$admin);
        return redirect('admin/dashboard')->with('successprofile','Your profile has been successfully updated');

    }
    function editPassword(Request $req)
    {
        return view('admin/editpassword');
    }
    function updatePassword(Request $req)
    {
        $admin = Admin::find($req->id);
        if(Hash::check($req->old_password,$admin->admin_password))
        {
            $admin->admin_password = Hash::make($req->admin_password);
            $admin->save();
            $req->session()->put('admin',$admin);
            return redirect('admin/dashboard')->with('successpassword','Your Password has been successfully updated');
        }
        else{
            return redirect('admin/editpassword')->with('error','Incorrect old password, please input your password correctly');
        }
    }

    
}
