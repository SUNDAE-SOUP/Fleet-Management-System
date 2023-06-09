<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\UserAssignedVehicle;
use App\Models\Status;
use App\Models\Request_History;
use App\Models\RequestParticular;
use App\Models\Vehicle;
use App\Models\Car_Model;
use App\Models\Third_Request_Category;

class UserHistoryController extends Controller
{
    public function index(){
        $userId = auth()->user()->id;

        // $reqParticular = RequestParticular::where('is_approved', 1)->orWhere('is_approved', 2)->get();
        $reqParticular = RequestParticular::where('user_id', $userId)->whereIn('is_approved', [1, 2])->get();    
        $data = Vehicle::where('id', $userId)->get();   //get the column values in vehicles table

        $firstVehicle = $data->first(); // Access the first model in the collection
        $plateNo = $firstVehicle->model_id; // Store the value of the 'plate_no' column in the $plateNo variable
        $carModel = Car_Model::where('id', $plateNo)->pluck('name')->first();// car model
       


        return view('components/user/section/user-history',compact('reqParticular','carModel'));
    }
}
