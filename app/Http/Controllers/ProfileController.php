<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    
	function getProfile($id){
		return view("profile",['num'=> $id]);
	}

}