<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminHelpController extends Controller
{
    public function index(){

        return view('components/admin/section/admin-help');
    }
}
