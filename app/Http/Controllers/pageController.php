<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Fund;
use App\Client;

class pageController extends Controller
{
    public function main(){
    	// $funds = App\Fund::all();
    	return view('main');
	}

	public function table($client){
    	$funds = Fund::all();
    	$clientName = 'Client'.$client;
    	$clientPerm = Client::where('name', $clientName)->first();


    	$temp = array($clientPerm->permissions)[0];
    	$perm = json_decode($temp);

    	foreach ($funds as $fund)
    		if (!(in_array($fund->type, $perm))) {
    			$fund->fundName = '***';
	    		$fund->inceptionDate = '***';
	    		$fund->description = '***';
    		}
    	return view('table', ['funds'=>$funds, 'client' => $client]);
	}

}

