<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use DB;

class TestController extends Controller{
	public function test(){
		$empregados=DB::select('select * from empregados');
		var_dump($empregados);
	}

}
