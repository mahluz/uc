<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
