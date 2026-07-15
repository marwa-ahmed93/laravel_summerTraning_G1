<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
   public function create(){
      
   return view('cars.create');
     
   }

   public function store(Request $request){
    
      $validated = $request->validate([
        'model' => 'required|max:255',
        'price' => 'required',
        'image' => 'required|image|mimes:jpg,bmp,png,jpeg',
    ]);

   $image = Storage::put('avatar',$validated['image']);

$car =  Car::insert([
   'model'=>$validated['model'],
   'price'=>$validated['price'],
   'image'=>$image
]);

   //   dd($car);
   return Redirect()->route('car.index');
   }




   public function index(){
   //  $cars = Car::paginate(6);  //ORM
   $cars = DB::table('cars')->get();
    return view('cars.index',compact('cars'));
   }


   public function delete($id){
      Car::findOrFail($id)->delete();
return Redirect()->route('car.index');
   }


public function show(){
$cars = Car::withTrashed()->get();
return view('cars.showDeleted',compact('cars'));
}

public function restore($id){
   Car::withTrashed()->where('id',$id)->restore();
   return Redirect()->route('car.index');

}

}
