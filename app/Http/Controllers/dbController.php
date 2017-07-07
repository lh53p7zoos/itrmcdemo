<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\employees;
use DB;

class dbController extends Controller
{
    
    public function d3(){
		return view('day3/index');
	}

    public function employees(){
    	$records=employees::all();
    	return view('day3/employees')->with('records',$records);
    }

    public function proccessRegistration(Request $request){
    	$data=$request->except('imgfile');
    	//$data=$request->all();

		if(isset($data['_token'])){
			$data['filename']=$request->file('imgfile')->getClientOriginalName();
    		$data['path']=$request->file('imgfile')->move(public_path('uploads'),$data['filename']);
    		$data['imgpath']='uploads/'.$data['filename'];

			$data['fullname'] = $data['fname']." ".$data['mname']." ".$data['lname'];
			if($data['gn'] == "M"){
				$data['fullname'] = "Mr. ".$data['fullname'];
			}
			else {
				if($data['cs'] == "S"){
					$data['fullname'] = "Ms. ".$data['fullname'];
				}
				else {
					$data['fullname'] = "Mrs. ".$data['fullname'];
				}
			}

			return view('day3/profile')->with('data',$data);
		}
		return view('day3/register');
    }

    public function register(){
		return view('day3/register');
	}

	//public function profile(){
	//	return view('day3/profile')->with('data',$data);
	//}

}
