<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DriverController extends Controller
{
 public function index(){
    $drivers =  Driver::paginate(10);
    // dd($drivers);
    return view('driver.index' ,[compact('drivers')]);
 }

public function show($id){
//  $driver = Driver::where('id','>',10)->orderBy('name')->get();
//  $driver = DB::table('drivers')->find($id);

$driver = Driver::findOrFail($id);
return view('driver.show',compact('driver'));

}


public function create(){
   return view('driver.create');
}
public function store(Request $request){

//   dd($request->all());
$validated = $request->validate([
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
    ]);  

   //  Driver::create([
   //      'name'=>$validated['name'],
   //      'email'=>$validated['email'],
   //      'password'=>$validated['password'],
   //  ]);
   
// DB::table('users')->insert(['']);

$driver= new Driver();
$driver->name = $request->name;
$driver->email = $request->email;
$driver->password = $request->password;
$driver->save();

 return redirect('/drivers');



}


}
