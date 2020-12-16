<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $user=User::where(['email'=>$request->email])->first();

        if(!$user|| !Hash::check($request->password, $user->password)){
            return "User name or password does not match";
        }
        else{
            $request->session('user',$user);
            return redirect('/');
            
        }
    }
    public function welcome()
    {
        return view('welcome');
    }
    public function index()
    {
        return view('ecommerce.login');
    }
}
