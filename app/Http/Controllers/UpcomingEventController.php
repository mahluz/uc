<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Layout;

class UpcomingEventController extends Controller
{
    public function index(){
    	$data["upcoming_event"] = Layout::where('model','upcoming event')->get();
    	// dd($data);
    	return view('upcoming_event.index',$data);
    }
    public function create(){

        return view('upcoming_event.create');
    }
    public function store(Request $request){
        // dd($request);
        $path = $request->file('photo')->store('layouts/upcoming_event');
        $db["event"] = Layout::create([
            "model" => "upcoming event",
            "item" => $request["item"],
            "content" => $request["content"],
            "place" => $request["place"],
            "date" => $request["date"],
            "photo" => $path
        ]);

        return redirect('admin/upcomingEvent');
    }
    public function edit(Request $request){
    	$data["upcoming_event"] = Layout::where('id',$request["id"])->first();
    	$data["photo"] = $request["photo"];
    	return view('upcoming_event.edit',$data);
    }
    public function update(Request $request){
    	if($request->hasFile('photo')){
    		// return "ada foto";
    		$path = $request->file('photo')->store('layouts/upcoming_event');

    		$db["event"] = Layout::where('id',$request["id"])->update([
    			"model" => "upcoming event",
    			"item" => $request["item"],
    			"content" => $request["content"],
    			"place" => $request["place"],
    			"date" => $request["date"],
    			"photo" => $path
    			]);
    		$data["photo"] = File::delete(storage_path().'/app/'.$request['old_photo']);

    	} else {
    		$db["event"] = Layout::where('id',$request["id"])->update([
    			"model" => "upcoming event",
    			"item" => $request["item"],
    			"content" => $request["content"],
    			"place" => $request["place"],
    			"date" => $request["date"],
    			]);
    	}

    	return redirect('admin/upcomingEvent');
    }
    public function delete(Request $request){
        $db["event"] = Layout::where('id',$request["id"])->delete();
        $file["photo"] = File::delete('storage/app/'.$request["photo"]);

        return redirect('admin/upcomingEvent');
    }
}
