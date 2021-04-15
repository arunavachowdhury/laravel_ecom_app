<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Hash;
use Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(Request $request){
    	// dd($request);
    	$request->validate([
    		'email' => 'required|email',
    		'password' => 'required'
    	]);
    	
    	$credentials = [
            'email'          => $request->email,
            'password'       => $request->password,
        ];

        if(!Auth::attempt($credentials)){
        	throw ValidationException::withMessages([
        		'email' => 'Provide credentials are incorrect'
        	]);
        }


    	$user = Auth::user();
    	
    	$token = $user->createToken('auth_token')->accessToken;

    	$response['user'] = $user;
    	$response['access_token'] = $token;

    	return response($response);
    }
}
