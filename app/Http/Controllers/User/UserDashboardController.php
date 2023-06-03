<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserAssignedVehicle;
use App\Models\Request_History;

class UserDashboardController extends Controller
{
    public function index(){

        return view('components/user/section/user-dashboard');
    }
}
