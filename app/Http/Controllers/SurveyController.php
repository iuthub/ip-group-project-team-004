<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurveyController extends Controller
{
   public function index(){
    	
    	return view('surveyCreate');
    }
     public function create(){
    	
    	return view('construct');
    }
}
