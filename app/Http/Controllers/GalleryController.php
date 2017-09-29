<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

use App\Gallery;
use App\User;

class GalleryController extends Controller
{
    public function index(){
    	$data["gallery"] = User::join('gallery','gallery.user_id','users.id')->get();

    	return view('gallery.index',$data);
    }
    public function create(){

    	return view('gallery.create');
    }
    public function store(Request $request){
    	// dd($request);
    	
    	$path = $request->file('photo')->store('photos');

    	$db["gallery"] = Gallery::create([
    		"user_id" => Auth::user()->id,
    		"title" => $request["title"],
    		"description" => $request["description"],
    		"photo" => $path
    	]);

    	return redirect('admin/gallery');
    }
    public function edit(Request $request){
        $data["gallery"] = Gallery::where('id',$request["id"])->first();
        return view('gallery.edit',$data);
    }
    public function update(Request $request){
        if($request->hasFile('photo')){
            $path = $request->file('photo')->store('photos');

            $db["gallery"] = Gallery::where('id',$request["id"])->update([
                "user_id" => Auth::user()->id,
                "title" => $request["title"],
                "description" => $request["description"],
                "photo" => $path
            ]);

            $file["photo"] = File::delete('storage/app/'.$request["photo"]);
        } else {
            $db["gallery"] = Gallery::where('id',$request["id"])->update([
                "user_id" => Auth::user()->id,
                "title" => $request["title"],
                "description" => $request["description"],
                "photo" => $path
            ]);
        }

        return redirect('admin/gallery');
    }
    public function delete(Request $request){
    	$db["gallery"] = Gallery::where('id',$request["id"])->delete();
    	$file["photo"] = File::delete('storage/app/'.$request["photo"]);

    	return redirect('admin/gallery');

    }
}
