<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = Customer::get();
        return view('admin/customer',['customer'=>$customer]);

    }

    public function create()
    {
        return view('admin/newcustomer');
    }
    public function store(Request $req)
    {
        $req->validate([
            'customer_name'=> 'required',
            'customer_quote' => 'required',
            'customer_image' => 'required|mimes:jpg,jpeg,png |max:2048'
        ]);
        $image = $req->file('customer_image');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);
        $customer = new Customer;
        $customer->customer_image = $imageName;
        $customer->customer_name = $req->customer_name;
        $customer->customer_quote = $req->customer_quote;

        $customer->save();
        return redirect('admin/customer')->with('successadd','Customer added successfully');
    }

    public function editCustomer($id)
    {
        $customer = Customer::find($id);
        return view('admin/editcustomer',compact('customer'));
    }

    public function updateCustomer(Request $req)
    {
        $req->validate([
            'customer_name'=> 'required',
            'customer_quote' => 'required',
        ]);
        $customer = Customer::find($req->id);
        $customer->customer_name = $req->customer_name;
        $customer->customer_quote = $req->customer_quote;
        $customer->save();
        return redirect('admin/customer')->with('successupdate','Customer updated successfully');
    }

    public function editCustomerImage($id)
    {
        $customer = Customer::find($id);
        return view('admin/editcustomerimage',compact('customer'));
    }

    public function updateCustomerImage(Request $req)
    {
        $req->validate([
            'customer_image' => 'required|mimes:jpg,jpeg,png |max:2048'
        ]);
        $customer = Customer::find($req->id);
        unlink(public_path('images').'/'.$customer->customer_image);
        $image = $req->file('customer_image');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);
        
        $customer->customer_image = $imageName;
        $customer->save();
        return redirect('admin/customer')->with('successupdateimage','Customer image updated successfully');
    }

    public function deleteCustomer($id)
    {
        $customer = Customer::find($id);
        unlink(public_path('images').'/'.$customer->customer_image);
        $customer->delete();
        return redirect('admin/customer')->with('successdelete','Customer deleted successfully');
    }
}
