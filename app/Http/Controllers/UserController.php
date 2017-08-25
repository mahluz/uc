<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\role;

class UserController extends Controller
{
    public function index(){
    	$data['users']=role::join('users','users.role_id','=','roles.id')->get();
    	return view('user.index',$data);
    }
    public function create(){

    }
    public function store(Request $request){

    }
    public function edit(){

    }
    public function update(){

    }
    public function delete(Request $request){
    	
    }
}
