<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

use App\Role;
use App\User;
use App\Order;
use App\OrderFood;
use App\OrderDrink;
use App\OrderDessert;

class TestController extends Controller
{
    public function index(){
    	$debug = User::join('orders','users.id','orders.user_id')->first();

    	// 1. login Hp 
    	// 2. menu order 
    	// 3. pilih meja 
    	// 4. atas nama 

    	// -- data masuk ke database order -> create db order 
    	// -- lalu masuk ke list dimana ambil data order where status nya = belum di bayar kalau sudah dibayar tidak masuk dilist 

    	// 5. menu makanan , minuman , dessert 
    	// 6. pilih menu contoh makanan nasi goreng 
    	// 7. create db order food where order id, dan update order where id ambil total pembayaran default 0 + request menu

    	dd($debug);
    }
}
