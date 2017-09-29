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
        $data["role"] = role::get();
        return view('user.create',$data);
    }
    public function store(Request $request){
        $db["user"] = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'role_id'=> $request['role'],
            'password' => bcrypt($request['password']),
        ]);

        return redirect('admin/user');
    }
    public function edit(Request $request){
        $data["user"] = User::where('id',$request["id"])->first();
        $data["role"] = role::get();

        return view('user.edit',$data);
    }
    public function update(Request $request){
         $db["user"] = User::where('id',$request["id"])->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'role_id'=> $request['role'],
            'password' => bcrypt($request['password']),
        ]);

        return redirect('admin/user');
    }
    public function delete(Request $request){
    	$db["user"] = User::where('id',$request["id"])->delete();

        return redirect('admin/user');
    }
}
