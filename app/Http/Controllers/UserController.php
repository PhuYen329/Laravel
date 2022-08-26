<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{ 
    //Trang chủ Admin
    public function Admin(){
        return view('Page.Admin.Home.index');
    }
    //Trang chủ Customer
    public function Customer(){
        return view('Page.Customer.Home.index');
    }
}
