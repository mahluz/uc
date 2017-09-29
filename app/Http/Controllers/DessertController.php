<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

use App\Dessert;

class DessertController extends Controller
{
    public function index(){
    	$data["dessert"] = Dessert::get();
    	return view('dessert.index',$data);
    }
    public function create(){

    	return view('dessert.create');
    }
    public function edit(Request $request){
        $data["dessert"] = Dessert::where('id',$request["id"])->first();

        return view('dessert.edit',$data);
    }
    public function update(Request $request){
        if($request->hasFile('photo')){
            $path = $request->file('photo')->store('photos');

            $db["dessert"] = Dessert::where('id',$request["id"])->update([
                "user_id" => Auth::user()->id,
                "name" => $request["name"],
                "description" => $request["description"],
                "ingredient" => $request["ingredient"],
                "cost" => $request["cost"],
                "selling_price" => $request["selling_price"],
                "photo" => $path
            ]);

            $file["photo"] = File::delete('storage/app/'.$request["old_photo"]);
        } else {
            $db["dessert"] = Dessert::where('id',$request["id"])->update([
                "user_id" => Auth::user()->id,
                "name" => $request["name"],
                "description" => $request["description"],
                "ingredient" => $request["ingredient"],
                "cost" => $request["cost"],
                "selling_price" => $request["selling_price"]
            ]);
        }

        return redirect('admin/dessert');
    }
    public function store(Request $request){
    	// dd($request);
    	if($request->hasFile('photo')){
    		// return "adafoto";

    		$path = $request->file('photo')->store('photos');

    		$db["dessert"] = Dessert::create([
    			"user_id" => Auth::user()->id,
    			"name" => $request["name"],
    			"description" => $request["description"],
    			"ingredient" => $request["ingredient"],
    			"cost" => $request["cost"],
    			"selling_price" => $request["selling_price"],
    			"photo" => $path
    			]);
    	} else {
    		$db["dessert"] = Dessert::create([
    			"user_id" => Auth::user()->id,
    			"name" => $request["name"],
    			"description" => $request["description"],
    			"ingredient" => $request["ingredient"],
    			"cost" => $request["cost"],
    			"selling_price" => $request["selling_price"]
    			]);
    	}

    	return redirect('admin/dessert');
    }
    public function delete(Request $request){
    	$data['dessert'] = Dessert::where('id',$request['id'])->delete();
    	$data['photo'] = File::delete('storage/app/'.$request['photo']);

    	return redirect('admin/food');
    }
}
