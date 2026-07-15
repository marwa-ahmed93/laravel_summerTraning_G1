<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
   
public function show($id){
  $employee =  Employee::find($id)->first();
  //  dd($employee->visacard->visa_number);
 return view('showEmployees',compact('employee'));
} 


public function index(){
$employees =   Employee::with('visacard')->get();  //ORM
 //$employees = DB::table('employees')->get();    //query 
// dd($employees);
return view('allEmp',compact('employees'));
}

}
