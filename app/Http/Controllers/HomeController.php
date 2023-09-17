<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $role = Auth::user()->role??"user";
        $products = Product::get();
        if ($role == 'admin') {
            return view('admin.home');
        }
        else {
            return view('user.home', compact('products'));
        }
       }
}
