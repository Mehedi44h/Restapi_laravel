<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function register(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required|confirmed',
        ]);
        $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password' => Hash::make($request->passowrd),
            // 'remember_token'=>         $token=$user->createToken($request->name)->plainTextToken,

        ]);
        $token=$user->createToken($request->name)->plainTextToken;
        return response([
            'user'=>$user,
            'token'=>$token
        ],201); 
    }
}