<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect(){
        $role=Auth::user()->role;
        if($role=='user'){
          return view('user.home');
        }else{
            return view('admin.home');
        }
    }
    public function index(){
        $role = Auth::user()->role??"user";
        if ($role == 'admin') {
            return view('admin.home');
        }
        else {
            return view('user.home');
        }
       }
}
