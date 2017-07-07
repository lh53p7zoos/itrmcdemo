<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class Controller1 extends Controller
{
    //use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
	public function d2(){
		return view('day2/child1');
	}

	public function child1(){
		return view('day2/child1');
	}
	
	public function child2(){
		return view('day2/child2');
	}
	
	public function child3(Request $request){
		$data['fn']=$request->input('fname');
		$data['ln']=$request->input('lname');
		$data['token']=$request->input('_token');
		if(isset($data['token'])){
			return view('day2/child3')->with('date', $data);
		}
		return redirect('child2');
	}
	
	public function child4(){
		$grade=79;
		return view('day2/child4')->with('grade',$grade);
	}
	
	public function child5(){
		return view('day2/child5');
	}

	public function upload(){
		return view('day2/fileupload');
	}

	public function proccessupload(Request $request){
		//$path=$request->file('file1')->store('uploads');
		$filename=$request->file('file1')->getClientOriginalName();
		$path=$request->file('file1')->move(public_path('uploads'),$filename);
		//$path=$request->file('file1')->storeAs('uploads',$filename);

		$data['imgpath']='uploads/'.$filename;
		$data['filename']=$filename;
		$data['filesize']=number_format($request->file('file1')->getClientSize() / 1000,2);
		$data['fileext']=$request->file('file1')->getClientOriginalExtension();
		$data['mime']=$request->file('file1')->getClientMimeType();

		return view('day2/proccess')->with('data',$data);
	}

	//Activity 2
	public function register(){
		return view('activity2/register');
	}

	public function view(Request $request){
		$data['fn']=$request->input('fname','Raymond');
		$data['mn']=$request->input('mname','Legaspi');
		$data['ln']=$request->input('lname','Flores');

		$data['gn']=$request->input('gender','M');
		$data['cs']=$request->input('cstatus','M');
		$data['bdate']=$request->input('bdate','February 26, 1984');
		$data['dept']=$request->input('dept','Maintenance');
		$data['pos']=$request->input('pos','Utility');
		$data['token']=$request->input('_token');

		$data['path']=$request->path();
		$data['url']=$request->url();
		$data['furl']=$request->fullUrl();

		$data['fullname'] = $data['fn']." ".$data['mn']." ".$data['ln'];
		
		if($data['cs'] == "S"){
			if($data['gn'] == "M"){
				$data['fullname'] = "Mr. ".$data['fullname'];
			}
			else {
				$data['fullname'] = "Ms. ".$data['fullname'];
			}
		}
		else {
			if($data['gn'] == "M"){
				$data['fullname'] = "Mr. ".$data['fullname'];
			}
			else {
				$data['fullname'] = "Mrs. ".$data['fullname'];
			}
		}


		if(isset($data['token'])){
			return view('activity2/view')->with('data', $data);
		}
		return redirect('register');
	}
}
