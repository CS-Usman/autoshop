<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function display(){
        $data = Admin::all();
        return view('homepage')->with(['data'=>$data]);
    }
    public function loginDisplay(){
        return view('loginPage');
    }
}
