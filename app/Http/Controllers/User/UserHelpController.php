<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserHelpController extends Controller
{
    public function index(){

        return view('components/user/section/user-help');
    }
}
