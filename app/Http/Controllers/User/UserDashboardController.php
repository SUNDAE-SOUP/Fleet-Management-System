<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserAssignedVehicle;
use App\Models\Request_History;

use App\Models\Vehicle;
use App\Models\Car_Model;
use App\Models\BU_Dept;

class UserDashboardController extends Controller
{
    public function index(){
        $userId = auth()->id(); // Get the ID of the authenticated user
        $data = Vehicle::where('id', $userId)->get();//get the column values in vehicles table

        $firstVehicle = $data->first(); // Access the first model in the collection
        $plateNo = $firstVehicle->model_id; // Store the value of the 'plate_no' column in the $plateNo variable


       
        $buDept = auth()->user()->bu_dept_id;
        $data3 = BU_Dept::where('id', $buDept)->pluck('name')->first();

        //this is working bu tneed to change the moodel name to match the name in the migration
        $data2 = Car_Model::where('id', $plateNo)->pluck('name')->first();
        

        return view('components/user/section/user-dashboard',compact('data','plateNo','data3','data2'));
   
        
       
    }




    //working syntax commented for other purpose
    // public function getvalue(){
    //     $userId = auth()->id(); // Get the ID of the authenticated user
    //     $data = Vehicle::where('id', $userId)->pluck('plate_no')->first();

        // this is to get the value from a returned array
        // $firstVehicle = $data->first(); // Access the first model in the collection
        // $plateNo = $firstVehicle->model_id; // Store the value of the 'plate_no' column in the $plateNo variable

    //     return view('components/user/section/user-dashboard',compact('data'));
    // }



}
