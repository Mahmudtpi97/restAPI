<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{

// Write SQL Query to Show, Insert, Update, Delete Data......

// ShowAllData
 public function allData(){
    $sql = "Select * from employee";
    $request = DB::select($sql);
     return $request;
 }
 // insertData
 public function insertData(Request $request){
    $name   = $request->input('name');
    $phone  = $request->input('phone');
    $cat    = $request->input('cat');
    $status = $request->input('status');

    $sql = "INSERT INTO 'employee' ('id',`name`,`phone`,`cat`,`status`) VALUES (?,?,?,?,?)" ;
    $result = DB::insert($sql,[$id,$name,$phone,$cat,$status] );

    if ($result == true) {
        return "Insert Success";
    }
    else{
        return "Insert Failed";
    }

 }

// updateData only name and phone
public function updateData(Request $request){
        $id     = $request->input('id');
        $name   = $request->input('name');
        $phone  = $request->input('phone');
        // $cat    = $request->input('cat');
        // $status = $request->input('status');

        $sql = "UPDATE `employee` SET `name`=?,'phone'=? WHERE id= ? ";
        $result = DB::update($sql, [$name,$phone,$id]);
        if ($result == true) {
            return "Update Success";
        }
        else{
            return "Update Failed";
        }
}
// deleteData
public function deleteData(Request $request){
        $id     = $request->input('id');

        $sql = "DELETE FROM `employee` WHERE id= ? ";
        $result = DB::delete($sql, [$id]);

        if ($result == true) {
            return "Delete Success";
        }
        else{
            return "Delete Failed";
        }
}



}
