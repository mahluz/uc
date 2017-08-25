<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

use App\Food;

class FoodController extends Controller
{
    public function index(){
    	$data['food'] = Food::get();
    	return view('food.index',$data);
    }
    public function create(){

    	return view('food.create');
    }
    public function store(Request $request){
    	// dd($request);
    	if($request->hasFile('photo')){
    		// return "yey";
    		$path = $request->file('photo')->store('photos'); 

    		$data['food'] = Food::create([
    			"user_id"=> Auth::user()->id,
    			"name" =>$request['name'],
    			"description"=>$request['description'],
    			"ingredient" =>$request['ingredient'],
    			"cost"=>$request['cost'],
    			"selling_price"=>$request['selling_price'],
    			"photo"=>$path,
    			]);

    		return redirect('admin/food');

    	} else {
    		return "tydack";
    	}
    }
    public function delete(Request $request){
    	$data['food'] = Food::where('id',$request['id'])->delete();
    	$data['photo'] = File::delete('storage/app/'.$request['photo']);

    	return redirect('admin/food');
    }
}
