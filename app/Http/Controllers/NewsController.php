<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\News;
use App\User;

class NewsController extends Controller
{
    public function index(){
    	$data["news"] = User::join('news','news.user_id','users.id')->get();

    	// dd($data["news"]);
    	return view('news.index',$data);
    }
    public function create(){

    	return view('news.create');
    }
    public function store(Request $request){
    	// dd($request);
    	$db["news"] = News::create([
    		"user_id" => Auth::user()->id,
    		"title" => $request["title"],
    		"description" =>$request["description"]
    		]);

    	return redirect('admin/news');
    }
    public function edit(Request $request){
        $data["news"] = News::where('id',$request["id"])->first();

        return view('news.edit',$data);
    }
    public function update(Request $request){
        $db["news"] = News::where('id',$request["id"])->update([
            "user_id" => Auth::user()->id,
            "title" => $request["title"],
            "description" =>$request["description"]
        ]);

        return redirect('admin/news');
    }
    public function delete(Request $request){
        $db["news"] = News::where('id',$request["id"])->delete();

        return redirect('admin/news');

    }
}
