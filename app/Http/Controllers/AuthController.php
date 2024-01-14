<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * create user
     * @param [string] name
     * @param [string] email
     * @param [string] password
     */

     public function register(request $request)
     {
        $request->validate([
            'name' => 'required',
            'email' => 'email|unique:users',
            'password' => 'required',
            'c_password' => 'required|same:password'
        ]);

        $user = User::create([
            'name'  => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        if($user->save())
        {
            // $createToken = $user->createToken('personal access token');
            // $token = $createToken->plainTextToken;

            return response()->json([
                'message' => 'user is created !'
                // 'token' =>  $token
            ]);

        } else
        {
            return response()->json([
                'error' => 'please enter correct data !'
            ]);
        }

     }



     // login 

     public function login(request $request)
     {
        $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        $credentials = request(['email', 'password']);

        if(!Auth::attempt($credentials))
        {
            return response()->json([
                'message' => 'unauthorized user'
            ]);
            
        } 
            $user = $request->user();
            $createToken = $user->createToken('Personal Acc Token');
            $token = $createToken->plainTextToken;

            return response()->json([
                'token' =>  $token,
                'token_type'    =>  'bearer'
            ]);

     }


     // get
     public function user(Request $request)
    {
        return response()->json($request->user());
    }

    // logout
    public function logout(request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json([
            'message'   =>  'logout'
        ]);
    }

}
