<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



use App\Models\Vehicle;
use App\Models\Car_Model;
use App\Models\BU_Dept;
use App\Models\Mode_Of_Payment;
use App\Models\Type_Of_Request;
use App\Models\Third_Request_Category;
use App\Models\Fourth_Request_Category;
use App\Models\RequestParticular;

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
        $data2 = Car_Model::where('id', $plateNo)->pluck('name')->first();


        $modeTransact = Mode_Of_Payment::get();//get all the column values in vehicles table
        $typeRequest = Type_Of_Request::get();//get all the column values 
        $typeCorrective =Third_Request_Category::get();
        $mechElec = Fourth_Request_Category::get();

        

        return view('components/user/section/user-send-request',compact('data','mechElec','plateNo','data2','modeTransact','typeRequest','typeCorrective'));
    }

    public function submit(){
       
    
        $request->validate([
            'employee_code' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $reqHistory = new RequestParticular;
        $reqHistory->name = $request->input('form_name');
        $reqHistory->email = $request->input('form_email');
        $reqHistory->save();

        
       
    }
}
