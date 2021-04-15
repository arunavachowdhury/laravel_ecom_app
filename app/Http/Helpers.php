<?php

if (! function_exists('common_asset')) {
    function common_asset($path, $secure = null) {
        return asset('/' . trim($path, '/'), $secure);
    }
}

if (! function_exists('app_common_asset')) {
    function app_common_asset($path, $secure = null) {
        return asset('/themes/common/' . trim($path, '/'), $secure);
    }
}

if (! function_exists('front_asset')) {
    function front_asset($path, $secure = null) {
        return asset('/themes/'.FRONT_THEME_NAME.'/' . trim($path, '/'), $secure);
    }
}

if (! function_exists('back_asset')) {
    function back_asset($path, $secure = null) {
        return asset('/themes/'.BACKEND_THEME_NAME.'/' . trim($path, '/'), $secure);
    }
}

if (! function_exists('media_path')) {
    function media_path($path, $secure = null) {
        $path = str_replace('media/', '', $path);
        return asset(config('constants.APP_UPLOAD_PATH') . trim($path, '/'), $secure);
    }
}

if (! function_exists('landing_page_asset')) {
    function landing_page_asset($path, $secure = null){
        return asset('/themes/'.LANDING_THEME_NAME.'/' . trim($path, '/'), $secure);
    }
}
