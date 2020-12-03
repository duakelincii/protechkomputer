<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {
        $client = Client::get();
        return view('admin/client',['client'=>$client]);

    }

    public function create()
    {
        return view('admin/newclient');
    }
    public function store(Request $req)
    {
        $image = $req->file('client_logo');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);
        $client = new client;
        $client->client_logo = $imageName;
        $client->client_name = $req->client_name;
        $client->client_url = $req->client_url;

        $client->save();
        return redirect('admin/client')->with('successadd','New Client added');
    }

    public function editClient($id)
    {
        $client = Client::find($id);
        return view('admin/editclient',compact('client'));
    }

    public function updateClient(Request $req)
    {
        $client = Client::find($req->id);
        $client->client_name = $req->client_name;
        $client->client_url = $req->client_url;
        $client->save();
        return redirect('admin/client')->with('successupdate','Client updated successfully');
    }

    public function editClientImage($id)
    {
        $client = Client::find($id);
        return view('admin/editclientimage',compact('client'));
    }

    public function updateClientImage(Request $req)
    {
        $client = Client::find($req->id);
        unlink(public_path('images').'/'.$client->client_logo);
        $image = $req->file('client_logo');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);
        
        $client->client_logo = $imageName;
        $client->save();
        return redirect('admin/client')->with('successupdateimage','Client image updated successfully');
    }

    public function deleteClient($id)
    {
        $client = Client::find($id);
        unlink(public_path('images').'/'.$client->client_logo);
        $client->delete();
        return redirect('admin/client')->with('successdelete','Client deleted successfully');
    }
}
