<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\staffsModel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    private $table;
    public function __construct(staffsModel $staffs)
    {
        $this->table=$staffs;
    }
    public function index(){
        return view('Page.Admin.Auth.index');
    }
    public function Login(Request $request){

    }
}
