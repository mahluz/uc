<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\User;
use App\Order;
use App\Food;
use App\Drink;
use App\Dessert;
use App\OrderFood;
use App\OrderDrink;
use App\OrderDessert;

class OrderController extends Controller
{
    public function index(){
    	$data['order'] = Order::get();
    	return view('order.index',$data);
    }

    public function payment(Request $request){
    	// dd($request);
    	$data['db'] = Order::where('id',$request['id'])->update([
    		"status" => "sudah membayar"
    	]);

    	return redirect('admin/order');
    }

    public function delete(Request $request){
    	// dd($request);
    	$data['db'] = Order::where('id',$request['id'])->delete();

    	return redirect('admin/order');
    }
}
