<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('hello');
    }


public function create(){
   return view('user.create');
}

public function store(Request $request){

   $validated = $request->validate([
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
    ]);  

    User::insert([
        'name'=>$validated['name'],
        'email'=>$validated['email'],
        'password'=>$validated['password'],
    ]);
 return redirect('/user');
}

}
