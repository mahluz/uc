<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

use App\Drink;

class DrinkController extends Controller
{
    public function index(){
    	$data['drinks'] = Drink::get();

    	return view('drink.index',$data);
    }

    public function create(){

    	return view('drink.create');
    }

    public function store(Request $request){
    	// dd($request);
    	$path = $request->file('photo')->store('photos');

    	$db["drink"] = Drink::create([
    		"user_id" => Auth::user()->id,
    		"name" => $request["name"],
    		"description" => $request["description"],
    		"cost" => $request["cost"],
    		"selling_price" => $request["selling_price"],
    		"photo" => $path
    	]);

    	return redirect('admin/drink');
    }
    public function edit(Request $request){
        $data["drink"] = Drink::where('id',$request["id"])->first();
        return view('drink.edit',$data);
    }
    public function update(Request $request){
        if($request->hasFile('photo')){
            $path = $request->file('photo')->store('photos');

            $db["drink"] = Drink::where('id',$request["id"])->update([
                "user_id" => Auth::user()->id,
                "name" => $request["name"],
                "description" => $request["description"],
                "cost" => $request["cost"],
                "selling_price" => $request["selling_price"],
                "photo" => $path
            ]);

            $file["photo"] = File::delete('storage/app/'.$request["old_photo"]);

        } else {
            $db["drink"] = Drink::where('id',$request["id"])->update([
                "user_id" => Auth::user()->id,
                "name" => $request["name"],
                "description" => $request["description"],
                "cost" => $request["cost"],
                "selling_price" => $request["selling_price"]
            ]);
        }

        return redirect('admin/drink');
    }
    public function delete(Request $request){
    	$db["drink"] = Drink::where('id',$request["id"])->delete();
    	$file["photo"] = File::delete('storage/app/'.$request["photo"]);

    	return redirect('admin/drink');
    }
}
