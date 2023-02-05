<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;




class UserController extends Controller
{
    //
    public function save(request $req)
    {
        // dd($req->all());
        //***validation garna ko lagi***
        $req->validate([
            'name' => 'required',
            'address' => 'required',
            'number' => 'required',
            'destination' => 'required',
        ]);

        // d***atabase maa data halna ko lagi***
        User::create([
            'name' => $req->name,
            'address' => $req->address,
            'contact' => $req->number,
            'destination' => $req->destination,
        ]);

        return redirect()->route('dashboard');
    }
    // to delete data from database
    public function delete($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->route('dashboard');
    }




    // to update data in database
    public function updateData(request $req)
    {
        $req->validate([
            'name' => 'required',
            'address' => 'required',
            'number' => 'required',
            'destination' => 'required',
        ]);

        $data = User::find($req->id);
        $data->name = $req->name;
        $data->address = $req->address;
        $data->contact = $req->number;
        $data->destination = $req->destination;
        $data->save();

        return redirect()->route('dashboard');
    }
    public function register(request $req)
    {
        // dd($req->all());
        $req->validate([
            'name' => 'required',
            'email' => 'required|unique:admins',
            'password' => 'required',
        ]);
        

        Admin::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password),
        ]);

        return redirect()->route('login');
    }

    public function login(Request $req)
    {
        // dd($req->all());

        $req->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($req->only('email', 'password'))) {
            // dd('log in');
            return redirect()->route('dashboard');
        } else {
            // dd('user not found');
            return back()->with('fail', 'Login Failed');
        }
    }

   

    
}
