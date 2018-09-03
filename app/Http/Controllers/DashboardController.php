<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use Redirect;

class DashboardController extends Controller
{
    // return admin dashboard
    public function dashboard()
    {
        if (Session::get('user_id')) {
            $result = $this->getUserData();
            return view('dashboard')->with('data',$result);
        }
        else {
            Session::put('exception', 'To access Dashboard,Please Login First.');
            return Redirect::to('/');
        }
    	
    }

    public function statement(){
        $card_no = Session::get('card_no');
        $result = DB::table('statements')
                    ->where('card_no',$card_no)
                    ->get();
        $second_result = $this->getUserData();
        return view('dashboard.statements')->with('data',$result)->with('result',$second_result);
    }

    public function getChangePin(){
        $result = $this->getUserData();
        return view('dashboard.changepin')->with('data',$result);
    }
    public function postChangePin(Request $request){
        $return = $this->getUserData();
        $this->validate($request,[
            'pin_no' => 'required|digits:4|'
        ]);
        $result = DB::table('users')->where('id', $return->id)->update(['pin_no' => $request->pin_no]);
        if ($result) {
            Session::put('exception','Pin Successfully Changed.');
            Session::put('pin_no',$return->pin_no);
            return Redirect::to('/dashboard');
        }
        else {
            Session::put('exception','Insert 4 digits Pin.');
            return Redirect::to('/changePin');  
        }
    }

    public function balanceEnquiry(){
        $result = $this->getUserData();
        return view('dashboard.balance')->with('data',$result);
    }

    private function getUserData(){
        $card_no = Session::get('card_no');
        $result = DB::table('users')
                    ->where('card_no',$card_no)
                    ->first();
        return $result; 
    }



}
