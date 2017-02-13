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
    	$decal = $request->clef;
        $arr = str_split($request->message,1);
        $alphabet = range('a','z');
        $messCrypt = "";
        foreach ($arr as $value) {
            $val = $value;
            $comparArr = array_search($val,$alphabet)+$decal;
            $val = $alphabet[$comparArr];
            $messCrypt .= $val;
        }

        $message = new Encrypt();
        $message->text = $messCrypt;
        $message->save();
        return redirect()->action('ChiffrementsController@getShowMess');
    }
    // public function getAlphaBet(){
    // 	$alphabet = range("a","z");
    //     $alphaString = implode('', $alphabet);
    //     $find = "f";
    //     $pos = strpos($alphaString, $find);
    //     return $pos;
    // }

}
