<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use Redirect;

class UserController extends Controller
{   
    // Register New Users
    public function newUser(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'fathers_name' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'email' => 'email|required|unique:users',
            'marital_status' => 'required',
            'state' => 'required',
            'district' => 'required',
            'address' => 'required',
            'religion' => 'required',
            'category' => 'required',
            'income' => 'required',
            'qualification' => 'required',
            'occupation' => 'required',
            'pan_no' => 'required',
            'citizenship_no' => 'required',
            'senior_citizen' => 'required',
            'existion_account' => 'required',
            'account_type' => 'required',
            'service_required' => 'required'
        ]);
        $data = array();
        $data['name'] = $request->name;
        $data['fathers_name'] = $request->fathers_name;
        $data['gender'] = $request->gender;
        $data['dob'] = $request->dob;
        $data['email'] = $request->email;
        $data['marital_status'] = $request->marital_status;
        $data['state'] = $request->state;
        $data['district'] = $request->district;
        $data['address'] = $request->address;
        $data['religion'] = $request->religion;
        $data['category'] = $request->category;
        $data['income'] = $request->income;
        $data['qualification'] = $request->qualification;
        $data['occupation'] = $request->occupation;
        $data['pan_no'] = $request->pan_no;
        $data['citizenship_no'] = $request->citizenship_no;
        $data['senior_citizen'] = $request->senior_citizen;
        $data['existion_account'] = $request->existion_account;
        $data['account_type'] = $request->account_type;
        $data['service_required'] = $request->service_required;
        
        $initial = 97770001;
        $final = mt_rand(1000,9999);
        $data['card_no'] = "$initial$final";
        $data['pin_no'] = rand(1000,9999);
        $data['balance'] = 0;
        $data['created_at'] = now();
        
        $id = DB::table('users')->insertGetId($data);
	    if ($id) {
            Session::put('exception','New Account Successfully Created.');
            Session::put('user_id',$id);
            Session::put('card_no',$data['card_no']);
            return Redirect::to('/dashboard');
        }
        else {
            Session::put('exception','Student Failed to Add.');
            return Redirect::to('/register');  
        }    
    }
    // Request Users login
    public function login(Request $request)
    {
    	$this->validate($request,[
            'card_no' => 'required',
            'pin_no' => 'required',
        ]);
    	$result = DB::table('users')
    				->where('card_no',$request->card_no)
    				->where('pin_no',$request->pin_no)
    				->first();
 
    	if ($result) {
    		Session::put('card_no',$result->card_no);
    		Session::put('user_id',$result->id);
    		return Redirect::to('/dashboard');
    	}
    	else {
    		Session::put('exception', 'Card or Pin Invaid');
    		return Redirect::to('/');
    	}
    }
    // Logout From Dashboard
    public function logout(Request $request)
    {
        Session::put('card_data',null);
        Session::put('user_id',null);
        return redirect('/');
    }
}
