<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Surveys extends Model
{
   public static function getSurveys(){
     	 $all = DB::table('surveys')->get();
    	return $all;
    }


}
