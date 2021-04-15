<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public static function pageView($path=null, $data=[])
	{
		$viewPath = BACKEND_THEME_NAME.".{$path}";
		return view($viewPath, $data); 
	}
}
