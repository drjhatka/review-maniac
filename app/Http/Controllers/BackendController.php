<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PornstarStoreRequest;
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

    public function add_pornstar(PornstarStoreRequest $request){

        $pornstar = new Pornstar();

        $pornstar->firstname = isset($request->firstname) ? $request->firstname : null;
        $pornstar->middlename = isset($request->middlename) ? $request->middlename : null;
        $pornstar->lastname = isset($request->lastname) ? $request->lastname : null;

        $pornstar->age = $request->age;
        $pornstar->date_of_birth = isset($request->dob)? $request->dob:strtotime('01/01/1984');
        
    //Body Measurement
        $pornstar->weight = isset($request->weight)? $request->weight:null;
        $pornstar->height = $request->height;
        $pornstar->breast_size = $request->breast_size;
        $pornstar->belly_size = $request->belly_size;
        $pornstar->hip_size = $request->hip_size;
        $pornstar->ethnicity = $request->ethnicity;

    //Boolean Data
        $pornstar->bubble_butt      = isset($request->bubble_butt)? true:false;
        $pornstar->natural_breast   = $request->natural_breast; 
        $pornstar->is_retired       = $request->is_retired; 

        if (isset($request->piercing)) {
            
        }



    }//end method
}
