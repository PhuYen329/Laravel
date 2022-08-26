<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;
class AuthController extends Controller
{
    public function Auth(){
        return view('Page.Admin.Auth.index');
    }
    public function Login(Request $request){
        $Email=$request->Email;
        $Password=$request->Password;
        $result=DB::table('staffs')->where('email',$Email)->where('password',$Password)->first();
        if($result){
            Session::put('name',$result->name);
            Session::put('id',$result->staff_id);
            return Redirect::to('/Admin');
        }else{
            return Redirect::to('/Auth');
        }
    }
    public function Logout(){
        Session::forget(['name','id']);
        return Redirect::to('/Auth');
    }
}
