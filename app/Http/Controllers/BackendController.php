<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pornstar;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function home(){
        return view('backend.dashboard');
    }

    public function add_pornstar_interface(){
        return view('backend.add-pornstar');
    }

    public function add_pornstar(Request $request){

        $pornstar = new Pornstar();

        $pornstar->firstname = isset($request->firstname) ? $request->firstname : null;
        $pornstar->middlename = isset($request->middlename) ? $request->middlename : null;
        $pornstar->lastname = isset($request->lastname) ? $request->lastname : null;

        $pornstar->age = $request->age;
        $pornstar->date_of_birth= $request->dob;
        
    //Body Measurement
        $pornstar->weight = $request->weight;
        $pornstar->height = $request->height;
        $pornstar->breast_size = $request->breast_size;
        $pornstar->belly_size = $request->belly_size;
        $pornstar->hip_size = $request->hip_size;
        $pornstar->ethnicity = $request->ethnicity;

    //Boolean Data
        $pornstar->bubble_butt      = $request->bubble_butt;
        $pornstar->natural_breast   = $request->natural_breast; 
        $pornstar->is_retired       = $request->is_retired; 

        if (isset($request->piercing)) {
            
        }



    }//end method
}
