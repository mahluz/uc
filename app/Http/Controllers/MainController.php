<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Layout;
use App\News;
use App\User;
use App\Gallery;

class MainController extends Controller
{
    public function index(){
    	$data["promotion"] = Layout::where('model','promotion')->get();
        $data["upcoming_event"] = Layout::where('model','upcoming event')->get();
        $data["news"] = User::join('news','news.user_id','users.id')->get();
        $data["gallery"] = User::join('gallery','gallery.user_id','users.id')->get();

    	return view('main.main',$data);
    }
    public function about(){

    	return view('main.about');
    }
    public function contact(){

    	return view('main.contact');
    }
}
