<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request){
        if($request->isMethod("POST")){

        }
        return view("client/auth/login");
    }
    public function register(Request $request){
        if($request->isMethod("POST")){

        }
        return view ("client/auth/register");
    }
}
