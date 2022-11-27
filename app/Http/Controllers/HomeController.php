<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
      // to get data from database
    public function dashboard()
    {
        return view ('dashboard', ['list'=> User::all()]);
    }
     // edit garni kura dekhauna lai 
    public function edit($id)
    {
        $data = User::find($id);
        return view('edit', ['data' => $data]);

    }

    public function register()
    {
        return view ('register');
    }

    public function login()
    {
        return view ('login');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()-> route('login');
    }

     
}
