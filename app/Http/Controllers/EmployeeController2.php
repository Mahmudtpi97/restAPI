<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController2 extends Controller
{
// Use Laravel Docs to Show, Insert, Update, Delete Data......

public function allData(){

    // $allData = DB::table('employee')->max('name');
    // $allData = DB::table('employee')->min('phone');
    // $allData = DB::table('employee')->count('phone');
    // $allData = DB::table('employee')->avg('phone');
    // $allData = DB::table('employee')->sum('phone');


    // $allData = DB::table('employee')->where('id',3)->get();
    // $allData = DB::table('employee')->where('id',3)->first();
    // return $allData->name;
    // $allData = DB::table('employee')->first();
    // return $allData->name;
    // $allData = DB::table('employee')->find(2);
    // return $allData->name;
    // $allData = DB::table('employee')->pluck('cat','name','phone');
    // return $allData;

    $allData = DB::table('employee')->get();
    return $allData;
}

 // insertData
public function dataInsert(Request $request){
    // return $request->all();

    $name   = $request->input('name');
    $phone  = $request->input('phone');
    $cat    = $request->input('cat');
    $status = $request->input('status');

    $formData = DB::table('employee')->insert(['name'=>$name, 'phone'=>$phone, 'cat'=>$cat, 'status'=>$status]);

    if ($formData == true) {
        return "Insert Success";
    }
    else{
        return "Insert Failed";
    }

}
// updateData only name and phone
public function dataUpdate(Request $request){

    $id   = $request->input('id');
    $name   = $request->input('name');
    $phone  = $request->input('phone');

    $formData = DB::table('employee')->where('id',$id)->update(['name'=>$name,'phone'=>$phone]);

    if ($formData == true) {
        return "Insert Success";
    }
    else{
        return "Insert Failed";
    }
}

// deleteData
public function dataDelete(Request $request){
    $id     = $request->input('id');
   $formData = DB::table('employee')->where('id',$id)->delete();

    if ($formData == true) {
        return "Delete Success";
    }
    else{
        return "Delete Failed";
    }
}



}
