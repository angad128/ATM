<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use Redirect;

class DepositController extends Controller
{
    public function getDeposit(){
        if (Session::get('user_id')) {
            return view('dashboard.deposit');
        }
        else {
            Session::put('exception', 'To access Dashboard,Please Login First.');
            return Redirect::to('/');
        }
    }

    public function postDeposit(Request $request){
        $this->validate($request,[
            'deposit' => 'required|numeric|min:1|max:200000',
        ]);

        $data = array();
        $data['card_no'] = Session::get('card_no');
        $data['deposit'] = $request->deposit;
        $data['withdrawn'] = null;
        $data['created_at'] = now();

        $this->changeBalance($request->deposit);

        $result = DB::table('statements')->insert($data);
        if ($result) {
            Session::put('exception',$request->deposit .' is Successfully Deposited!');
            return Redirect::to('/deposit');
        }
        else {
            Session::put('exception','Failed to Deposit!');
            return Redirect::to('/deposit');  
        }
    }

    private function changeBalance($deposit){
        $card_no = Session::get('card_no');
        $result = DB::table('users')
                    ->where('card_no',$card_no)
                    ->first();
        $oldBalance = $result->balance;
        $newBalance = $oldBalance + $deposit;   
        $newResult = DB::table('users')->where('card_no', $card_no)->update(['balance' => $newBalance]);
    }

}

