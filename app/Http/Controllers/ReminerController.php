<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReminerController extends Controller
{
    function home(){
    	$remiders = [
    		'go home',
    		'play game ',
    		'sleep'
    	];

    	return view('home' ,['remiders' => $remiders]);
    }
}
