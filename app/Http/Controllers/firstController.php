<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class firstController extends Controller
{
    public function first(){
        return 'This is First';
    }
    public function second($second){
        return 'This is '.$second;
    }
    public function third($third){
        return response($third);

    }
    public function fourth($fourth){
        return response($fourth)->header('data',$fourth);
    }

    public function five(){
        // $cars = array("Volvo", "BMW", "Toyota");
        // $cars = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        $cars = array (
                array("Volvo",22,18),
                array("BMW",15,13),
                array("Saab",5,2),
                array("Land Rover",17,15)
            );

        return response()
              ->json($cars);
    }

    public function download(){
        $path = 'demo.txt';
        return response()->download($path);
    }

    public function redirect(){
        return redirect('home');
    }


//   Caching Data
// Header Data Specific data Caching
public function catch(Request $request){
    return $request->header('name');
}
// Body Data Cache
public function catchbody(Request $request){
    return $request;
}


}
