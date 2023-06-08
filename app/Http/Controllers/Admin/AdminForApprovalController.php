<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserAssignedVehicle;
use App\Models\Status;
use App\Models\Request_History;
use App\Models\RequestParticular;
use App\Models\Vehicle;
use App\Models\Car_Model;
use App\Models\Third_Request_Category;
class AdminForApprovalController extends Controller
{
    public function index(){
        $userId = auth()->user()->id;

        $reqParticular = RequestParticular::where('is_approved', 0)->get();

        $data = Vehicle::where('id', $userId)->get();   //get the column values in vehicles table

        $firstVehicle = $data->first(); // Access the first model in the collection
        $plateNo = $firstVehicle->model_id; // Store the value of the 'plate_no' column in the $plateNo variable
        $carModel = Car_Model::where('id', $plateNo)->pluck('name')->first();// car model
       


        if ($reqParticular->isEmpty()){
            return view('components/admin/section/admin-for-approval',compact('reqParticular','carModel'));
        }else {
            return view('components/admin/section/admin-for-approval',compact('reqParticular','carModel'));
        }

    
    }

    public function approve(){
        $reqParticularId = RequestParticular::get('id'); // Assuming you are retrieving the 'id' from the request
        $target = RequestParticular::find($reqParticularId); // Retrieve the request particular by id
    
        if ($target->is_approved == 0) { // Check if target exists and is not already approved
            $target->is_approved = 1;
            $target->save();
        }
    
        return redirect('/admin/for-approval');
    }
    

    public function disapprove(){
       

    
    }
    

}
