<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoryModel;
class categoryController extends Controller
{
    public function listCategory(){
        $data=categoryModel::paginate(2);
        return view('Page.Admin.Category.index',compact('data'));
    }
}
