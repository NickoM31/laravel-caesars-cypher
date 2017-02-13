<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Encrypt;

class ChiffrementsController extends Controller
{
	public function getShowMess(){
		$mess = Encrypt::all();
		return view('listMess', ['mess'=>$mess]);

	}
	public function getViewForm(){
		return view('formEncrypt');
	}
    public function postMess(Request $request){
    	Encrypt::create($request->all());
    	return redirect()->action('ChiffrementsController@getShowMess');
    }
    public function getAlphaBet(){
    	$alphabet = range("a","z");
        $alphaString = implode('', $alphabet);
        $find = "c";
        $pos = strpos($alphaString, $find);
        return $pos;
    }

}
