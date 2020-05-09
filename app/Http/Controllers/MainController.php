<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class MainController extends Controller
{
    public function index(){
    	$all = App\Notify::allnn();
    	return view('main', compact('all'));
    }
}
