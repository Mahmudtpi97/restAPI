<?php

// Uncomment by bootstrap>app.php >> //$app->withEloquent();//

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController3 extends Controller
{
   // allData
    public function allData(){
        $result = Employee::all();
        return  response()->json($result);
    }
    // insertData
    public function dataInsert(Request $request){
        $result = $request->all();
        if (Employee::create($result)) {
            return "Insert Success";
        }
        else{
            return "Insert Failed";
        }

    }
    // updateData only name and cat
    public function dataUpdate(Request $request){
        $id       = $request->input('id');
        $name       = $request->input('name');
        $cat       = $request->input('cat');

        $formData = DB::table('employee')->where('id',$id)->update(['name'=>$name,'cat'=>$cat]);

        if ($formData == true) {
            return "Update Success";
        }
        else{
            return "Update Failed";
        }

    }
    // deleteData
    public function dataDelete(Request $request){
        $id       = $request->input('id');
        $result = Employee::findOrFail($id);

        if ($result->delete()) {
            return "Delete Success";
        }
        else{
            return "Delete Failed";
        }

    }

}
