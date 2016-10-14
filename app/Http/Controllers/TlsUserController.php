<?php

namespace App\Http\Controllers;

use App\TlsUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use App\Http\Requests;

class TlsUserController extends Controller
{
    //
    public function postSignUp(Request $request)
    {
        $this->validate($request, [
                
                'name' => 'required|alpha|max:120',
                'college' => 'required|alpha|max:100',
                'address' => 'required|max:120',
                'contact' => 'required|numeric',
                'username' => 'required|alpha_dash|unique:tls_users,username',
                'email' => 'required|email|unique:tls_users,email',
                'password' => 'required|min:6',
            ]);
    	
    	$tlsuser = new TlsUser();

    	$tlsuser->name = $request['name'];
    	$tlsuser->college = $request['college'];
    	$tlsuser->address = $request['address'];
    	$tlsuser->contact = $request['contact'];
    	$tlsuser->username = $request['username'];
    	$tlsuser->email = $request['email'];
    	$tlsuser->password = bcrypt($request['password']);


    	$tlsuser->save();

    	return redirect()->back();
    }

    public function postSignIn(Request $request)
    {
        $this->validate($request, [
                
                'username2' => 'required',
                'password2' => 'required',
            ]);

        if(Auth::guard('tls_users')->attempt(['username' => $request['username2'], 'password' => $request['password2']])){
            return redirect()->route('tlsplay');
        }
        else return redirect()->route('thelostsign')->with('msg','Invalid login credentials');
        
    }

    public function playDashboard()
    {
        return view('events.thelostsymbolplay');
    }

    public function getSignout()
    {
        Auth::guard('tls_users')->logout();

        return redirect(\URL::previous());
    }

    public function getSign()
    {
        if(Auth::guard('tls_users')->check())
        {
            return view('events.thelostsymbolplay');
        }
        else
        {
            return view('events.thelostsymbolsign');   
        }

        
    }


}
