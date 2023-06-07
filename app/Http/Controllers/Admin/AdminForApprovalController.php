<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserAssignedVehicle;
use App\Models\Status;
use App\Models\Request_History;
use App\Models\RequestParticular;
use App\Models\Vehicle;

class AdminForApprovalController extends Controller
{
    public function index(){
        $userId = auth()->user()->id;

        $reqParticular = RequestParticular::get();


       

        return view('components/admin/section/admin-for-approval');
    }


}
