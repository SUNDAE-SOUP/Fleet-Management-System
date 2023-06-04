<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Vehicle;
use App\Models\Car_Model;
use App\Models\BU_Dept;
use App\Models\Mode_Transaction;

class UserSendRequestController extends Controller
{
    // public function index(){

    //     return view('components/user/section/user-send-request');
    // }


    public function index(){
        $userId = auth()->id(); // Get the ID of the authenticated user
        $data = Vehicle::where('id', $userId)->get();//get all the column values in vehicles table

        $firstVehicle = $data->first(); // Access the first model in the collection
        $plateNo = $firstVehicle->model_id; // Store the value of the 'plate_no' column in the $plateNo variable


        //this is working bu tneed to change the moodel name to match the name in the migration
        // $buDept = auth()->user()->bu_dept_id;
        // $data3 = BU_Dept::where('id', $buDept)->pluck('name')->first();

        //this is working bu tneed to change the moodel name to match the name in the migration
        // $data2 = Car_Model::where('id', $plateNo)->pluck('name')->first();


        // $modeTransact = Mode_Transaction::get();//get all the column values in vehicles table

        

        return view('components/user/section/user-send-request',compact('data','plateNo',));
    }

    public function submit(){
        $modeTransact = Mode_Transaction::get();//get all the column values in vehicles table
        
        
       
    }
}
