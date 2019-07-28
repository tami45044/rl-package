<?php

namespace Devtojo\Calculator;

use App\Http\Requests;
use Devtojo\Calculator\Test;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CalculatorController extends Controller
{
    //
    public function add($a, $b){
		$result = $a + $b;

		// return config('config');

		//$log_request_details = Config::get('package::log_request_details');
		$log_request_details = config('config.log_request_details');
		return view('calculator::add', compact('result','log_request_details'));
	}

    public function subtract($a, $b){
    	echo $a - $b;
    }

	public function showForm(){
		return view('calculator::check');
	}

    public function check(Test $test){
    	echo $test->checkConfig();
    }


}