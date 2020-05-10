<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class SurveyController extends Controller
{
   public function index(){
    	
    	return view('surveyCreate');
    }
      public function getById($id){
    	$one = App\Surveys::find($id);
    	return view('pass', compact('one'));
    }
     public function set(){
    	dd('hey');
    	return view('construct');
    }
}
