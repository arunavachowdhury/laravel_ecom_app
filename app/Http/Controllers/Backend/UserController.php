<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend\BackendController;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Hash;
use Illuminate\Support\Arr;
use Auth;
use Validator;

use DateTime;
use DateInterval;
use DatePeriod;
use Image;

class UserController extends BackendController
{
    private $data;

    public function __construct() { }

    public function create(Request $request){
    	$this->data['roles'] = Role::pluck('name','name')->all();
    	$this->data['title'] = 'User Create';

        // $routes = \Route::getRoutes();

        // $route_list = [];
        // foreach ($routes as $key=> $route) {
        //     $route_action = $route->action;
        //     if($route_action['prefix'] == 'backend'){
        //         $route_arr = explode(".", $route->getName());
        //         $module_name = isset($route_arr['0'])?strtolower($route_arr['0']):'';
        //         $action_name = isset($route_arr['1'])?strtolower($route_arr['1']):''; 
        //         $route_list[] = $module_name.'-'.$action_name;
        //     }    
        // }

        // dd($route_list); 
        
        // $start    = (new DateTime('2020-03-01'))->modify('first day of this month');
        // $end      = (new DateTime('2020-03-13'))->modify('last day of this month');
        // $diff = $end->diff($start);
        // dd($diff->days);
        // $interval = DateInterval::createFromDateString('1 month');
        // $period   = new DatePeriod($start, $interval, $end);
        // // dd($period);
        // $month_array = [];
        // foreach ($period as $dt) {
        //     $month_array[$dt->format("m")]['month']=$dt->format("F");
        //     $month_array[$dt->format("m")]['last_day']=$dt->modify('last day of this month')->format('Y-m-d');
        // }

        // // File and new size
        // $filename = 'test.jpg';
        // $percent = 0.5;

        // // Content type
        // header('Content-Type: image/jpeg');

        // // Get new sizes
        // list($width, $height) = getimagesize($filename);
        // $newwidth = $width * $percent;
        // $newheight = $height * $percent;

        // // Load
        // $thumb = imagecreatetruecolor($newwidth, $newheight);
        // $source = imagecreatefromjpeg($filename);

        // // Resize
        // imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

        // // Output
        // imagejpeg($thumb);
        if($request->submit && $request->isMethod('post')){
            // dd($request->file);
            $request->validate([
                'file' => 'required|image|max:20000'
            ]);

            if($request->hasFile('file')){
                $image = $request->file('file');
                $file_name = time().uniqid().'.'.$image->getClientOriginalExtension();
                $path = public_path('/themes/back/image/');
                $image_resize = Image::make($image->getRealPath())->resize(1500, 200)->save($path.$file_name);

                $this->data['image'] = $file_name;
                return parent::pageView('users.test', $this->data);
            }
        }

    	return parent::pageView('users.create', $this->data);
    }

    public function store(Request $request){
    	dd($request->file);
        $validator_arr = [
            'name'  => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'password'  => 'required',
            'c_password' => 'required|same:password',
            'roles' => 'required|array'
        ];

        $validator = Validator::make($request->all(), $validator_arr);

        if($validator->fails()){
            return redirect()
                        ->back()
                        ->withErrors($validator->errors())
                        ->withInput();
        }else{
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'password' => Hash::make($request->password)
            ]);
        }
    }
}
