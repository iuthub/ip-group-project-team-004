<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Notify extends Model
{
     public static function allnn(){
     	 $all = DB::table('notify')->get();
    	return $all;
    }
}
