<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Order;

class ReportController extends Controller
{
    public function index(){
    	$firstDate = Order::where('status','sudah membayar')->orderBy('created_at','asc')->first();
    	$lastDate = Order::where('status','sudah membayar')->orderBy('created_at','desc')->first();
    	$data['report'] = Order::select(DB::raw('count(id) as `data`'),DB::raw("CONCAT_WS('-',YEAR(created_at),MONTH(created_at)) as monthyear"))
               ->groupby('monthyear')
               ->get();

    	// dd($reports);
    	// dd(date('Y-m',strtotime($firstDate->created_at)));

    	return view('report.index',$data);
    }
}
