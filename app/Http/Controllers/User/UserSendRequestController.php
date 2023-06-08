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

        $data2 = Car_Model::where('id', $plateNo)->pluck('name')->first();


        $modeTransact = Mode_Of_Payment::get();//get all the column values in vehicles table
        $typeRequest = Type_Of_Request::get();//get all the column values 
        $typeCorrective =Third_Request_Category::get();
        $mechElec = Fourth_Request_Category::get();

        

        return view('components/user/section/user-send-request',compact('data','mechElec','plateNo','data2','modeTransact','typeRequest','typeCorrective'));
    }

    public function submit(Request $request){

        // $request->validate([
        //     'employee_code' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
        // ]);

        $reqHistory = new RequestParticular;
        $reqHistory->user_id = auth()->id();
        $reqHistory->mode_of_transaction_id = $request->input('modeTransact');
        $reqHistory->type_of_request_id = $request->input('2ndCategory');
        $reqHistory->{'3rd_request_category_id'} = $request->input('3rdCategory');
        $reqHistory->{'4th_request_category_id'} = $request->input('4thCategory');
        $reqHistory->quotation_amount = $request->input('quotation');
        $reqHistory->is_approved=0;

        
        $reqHistory->save();




        return redirect('/user/send-request');

        
       
    }
}
