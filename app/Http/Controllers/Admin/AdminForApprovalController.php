<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserAssignedVehicle;
use App\Models\Status;
use App\Models\Request_History;

class AdminForApprovalController extends Controller
{
    public function index(){

        return Request_History::all();

        /* return view('components/admin/section/admin-for-approval'); */
    }


}
