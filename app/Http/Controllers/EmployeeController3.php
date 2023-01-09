<?php

// Uncomment by bootstrap>app.php >> //$app->withEloquent();//

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController3 extends Controller
{

    public function allData(){
        $result = Employee::all();

        return  response()->json($result);
    }

    // Aggregates Using Model
    public function count(){
        $result = Employee::count('phone');
        return $result;
    }
    public function sum(){
        $result = Employee::sum('status');
        return $result;
    }
    public function max(){
        $result = Employee::max('phone');
        return $result;
    }
    public function min(){
        $result = Employee::min('phone');
        return $result;
    }
    public function avg(){
        $result = Employee::avg('phone');
        return $result;
    }
}
