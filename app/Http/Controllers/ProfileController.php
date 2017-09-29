<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

use App\User;

class ProfileController extends Controller
{
    public function index(){

    }
    public function edit(Request $request){
    	// $data["user"] = User::where('id',$request["id"])->first();
    	return view('profile.edit');
    }
    public function update(Request $request){
    	// dd($request);
    	if($request->hasFile('photo')){
    		$path = $request->file('photo')->store('profile');

    		$db["user"] = User::where('id',Auth::user()->id)->update([
    			"name" => $request["name"],
    			"photo" => $path
    		]); 

    		if($request["old_photo"] != "profile/john_doe.jpeg"){
    			$file["photo"] = File::delete('storage/app/'.$request["old_photo"]);
    		}

    	} else {
    		$db["user"] = User::where('id',Auth::user()->id)->update([
    			"name" => $request["name"]
    		]);
    	}

    	return redirect('admin');
    }
}
