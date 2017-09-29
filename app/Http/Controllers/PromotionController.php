<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Layout;

class PromotionController extends Controller
{
    public function index(){
    	$data["promotion"] = Layout::where('model','promotion')->get();

    	return view('promotion.index',$data);
    }
    public function create(){

        return view('promotion.create');
    }
    public function store(Request $request){
        // dd($request);
        $path = $request->file('photo')->store('layouts/promotion');
        $db["promotion"] = Layout::create([
            "model" => "promotion",
            "item" => $request["item"],
            "content" => $request["content"],
            "price" => $request["price"],
            "photo" => $path
        ]);

        return redirect('admin/promotion');
    }
    public function edit(Request $request){
    	$data["promotion"] = Layout::where('id',$request["id"])->first();
    	$data["photo"] = $request["photo"];
    	return view('promotion.edit',$data);
    }
    public function update(Request $request){
    	// dd($request);

    	if($request->hasFile('photo')){
    		// return "ada foto";
    		$path = $request->file('photo')->store('layouts/promotion');

    		$db["promotion"] = Layout::where('id',$request["id"])->update([
    			"model" => "promotion",
    			"item" => $request["item"],
    			"content" => $request["content"],
    			"price" => $request["price"],
    			"photo" => $path
    			]);
            $data["photo"] = File::delete(storage_path().'/app/'.$request['old_photo']);

    	} else {
    		$db["promotion"] = Layout::where('id',$request["id"])->update([
    			"model" => "promotion",
    			"item" => $request["item"],
    			"content" => $request["content"],
    			"price" => $request["price"]
    			]);
    	}

    	return redirect('admin/promotion');
    }
    public function delete(Request $request){
        $db["promotion"] = Layout::where('id',$request["id"])->delete();
        $file["photo"] = File::delete('storage/app/'.$request["photo"]);

        return redirect('admin/promotion');
    }
}
