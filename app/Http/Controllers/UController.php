<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;
class UController extends Controller
{
    //

    public function index(Request $req){
    

    	$c_data=contact::all();

    	return view('users.index',compact(['c_data']));
    }
}
