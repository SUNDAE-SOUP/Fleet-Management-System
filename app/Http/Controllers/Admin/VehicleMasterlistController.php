<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehicle;
use Illuminate\Validation\Rule;

class VehicleMasterlistController extends Controller
{
    public function index()
    {
        return Vehicle::all();
    }

    
}
