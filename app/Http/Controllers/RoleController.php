<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    //
    public function role(){
    	return view('role.role');
    }

    public function patient(){
    	return view('role.patient');
    }
}
