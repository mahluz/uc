<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class TestController extends Controller
{
    public function index(){
    	$data = File::delete('storage/app/photos/6Cx0hlIZoQs6HXykT3EQCJp4nNkp9FfxMFGDg3sx.txt');

    	return "yey";
    }
}
