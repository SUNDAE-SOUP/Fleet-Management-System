<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserAssignedVehicle;
use App\Models\Request_History;

use App\Models\Vehicle;
use App\Models\Car_Model;
use App\Models\BU_Dept;
use App\Models\RequestParticular;
use App\Models\Mode_Of_Payment;
use App\Models\Type_Of_Request;

class UserDashboardController extends Controller
{
    public function index(){
        $userId = auth()->id(); // Get the ID of the authenticated user
        $data = Vehicle::where('id', $userId)->get();//get the column values in vehicles table

        $firstVehicle = $data->first(); // Access the first model in the collection
        $plateNo = $firstVehicle->model_id; // Store the value of the 'plate_no' column in the $plateNo variable
       
        $buDept = auth()->user()->bu_dept_id;
        $data3 = BU_Dept::where('id', $buDept)->pluck('name')->first();

        $data2 = Car_Model::where('id', $plateNo)->pluck('name')->first();

        /////////////this is for displaying the requests//////////////
        // $ModeTransactName=Mode_Of_Payment::pluck('name');
        // $typeReq =Type_Of_Request::pluck('name');
        
        $reqParticular = RequestParticular::where ('user_id', $userId )->get();
        $roleId = auth()->user()->role_id;

        if ($reqParticular->isEmpty()){
            return view('components/user/section/user-dashboard',compact('data','plateNo','data3','data2','reqParticular'));
        }else {


            return view('components/user/section/user-dashboard',compact('data','plateNo','data3','data2','reqParticular'));
        }

 
    }




    // public function index(){
    //     $userId = auth()->id(); // Get the ID of the authenticated user
    //     $data = Vehicle::where('id', $userId)->get();//get the column values in vehicles table

    //     $firstVehicle = $data->first(); // Access the first model in the collection
    //     $plateNo = $firstVehicle->model_id; // Store the value of the 'plate_no' column in the $plateNo variable
        
    //     $buDept = auth()->user()->bu_dept_id;
    //     $data3 = BU_Dept::where('id', $buDept)->pluck('name')->first();

    //     $data2 = Car_Model::where('id', $plateNo)->pluck('name')->first();

    //     /////////////this is for displaying the requests//////////////
    //     // $ModeTransactName=Mode_Of_Payment::pluck('name');
    //     // $typeReq =Type_Of_Request::pluck('name');
        
    //     $reqParticular = RequestParticular::where ('user_id', $userId )->get();
    //     $roleId = auth()->user()->role_id;

    //     if ($reqParticular->isEmpty()){
    //         return view('components/user/section/user-dashboard',compact('data','plateNo','data3','data2','reqParticular'));
    //     }else {


    //         return view('components/user/section/user-dashboard',compact('data','plateNo','data3','data2','reqParticular'));
    //     }

    
    //     // return view('components/user/section/user-dashboard',compact('data','plateNo','data3','data2','reqParticular'));
    // }



}
