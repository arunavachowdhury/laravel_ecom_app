<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend\BackendController;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Arr;

use DB;
use Validator;
use Session;
use Hash;
use Auth;
use Route;
use Redirect;

class LoginController extends BackendController
{

	/**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/backend/dashboard';

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function login(Request $request){
    	if($request->isMethod('post')){
    		
    		$validation = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required'
            ]);

            if ($validation->fails()) {
                return Redirect::back()
                        ->withErrors($validation)
                        ->withInput();
            }else{
            	
            	$credentials = [
                    'email'          => $request->email,
                    'password'       => $request->password,
                ];

            	$remember = ($request->remember == 'on') ? true : false;

            	if(Auth::guard('admin')->attempt($credentials, $remember)){
            		return redirect($this->redirectTo);
            	}else{
            		return redirect()->back();
            	}
            }
    	}
    	
    	$this->data['title'] = 'Backend Login';

    	return parent::pageView('login', $this->data);
    }

    public function logout(Request $request){
    	Auth::guard('admin')->logout();

    	$this->data['title'] = 'Backend Login';
    	return redirect()->route('auth.backend-login');
    }
}
