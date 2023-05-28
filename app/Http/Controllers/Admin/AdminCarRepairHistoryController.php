<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCarRepairHistoryController extends Controller
{
    public function index(){

        return view('components/admin/section/admin-car-repair-history');
    }
}
