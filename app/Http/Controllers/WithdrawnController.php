<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use Redirect;

class WithdrawnController extends Controller
{
  
    public function getWithdrawn(){
        if (Session::get('user_id')) {
            return view('dashboard.withdrawn');
        }
        else {
            Session::put('exception', 'To access Dashboard,Please Login First.');
            return Redirect::to('/');
        }
    }

    public function postWithdrawn(Request $request){
        $this->validate($request,[
            'withdrawn' => 'required|numeric|min:1|max:200000',
        ]);
        $card_no = Session::get('card_no');
        $result = DB::table('users')
                    ->where('card_no',$card_no)
                    ->first();
        $oldBalance = $result->balance;
        if (($oldBalance-$request->withdrawn)>1000) {
            $newBalance = $oldBalance - $request->withdrawn;   
            DB::table('users')->where('card_no', $card_no)->update(['balance' => $newBalance]);
            $data = array();
            $data['card_no'] = $card_no;
            $data['deposit'] = null;
            $data['withdrawn'] = $request->withdrawn;
            $data['created_at'] = now();
            $result = DB::table('statements')->insert($data);
            if ($result) {
                Session::put('exception',$request->withdrawn .' is Successfully Withdrawn!');
                return Redirect::to('/withdrawn');
            }
            else {
                Session::put('exception','Failed to Withdraw!');
                return Redirect::to('/withdrawn');  
            }
        } else {
            Session::put('exception','Not Enough Balnce to withdraw'.$request->withdrawn);
            return Redirect::to('/withdrawn'); 
        }
    }

}

