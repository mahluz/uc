<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
    	// return csrf_token();
    	return view('admin/beranda');
    }

    public function testing(){
    	return csrf_token();
    }
}
