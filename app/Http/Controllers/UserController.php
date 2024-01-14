<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    
    
    public function create () {
        return view('user.create');
    }

    public function single(request $request)
    {
        //  dd($request);

        $user = User::where('name', $request->user)->firstorfail();

        return view('user.single', ['user' => $user]);
    }


    public function store (request $request) {

        $request->validate([
            'name' => 'required|unique:users',
            'email'   =>  'required|email',
            'password'  =>  'required'
            
        ]);
        
        
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $reg = $user->save();

        if($reg)
        {
            return back()->with('success', 'User is registered');
        } 
        else{
            return back()->with('fail', 'Not registered' );
        }


        // return redirect(route('index'));
    }


    
    public function show () {
        // return 'all students';
        
        $users = User::all();
        return view('user.index', ['users' => $users]);
    
    }


    public function login() {
        return view('user.login');
    }

    public function loginData(request $request) {

        $request->validate([
            'name' => 'required',
            'email'   =>  'required|email',
            'password'  =>  'required'
            
        ]);

        $user = User::where('email','=', $request->email)->first();

        if($user)
        {
            if(hash::check($request->password, $user->email))
            {
                $request->session()->put('loginId', $user->id);
                // return redirect(route('user.dash'));
                return redirect()->route('user.dash');
            }
            else {
                return back()->with('fail', 'password is wrong');
            }
        }
        else{
                return back()->with('fail','email is wrong');
        }

    }




    public function dash () {
        
        if(Session::has('loginId'))
        {
            $data = User::where('id','=', Session::get('loginId'));
        }
            return view('user.dash', compact('data'));
    }

    public function logout()
    {
        if(Session::has('loginId'))
        {
            Session::pull('loginId');
            return redirect()->route('user.logout');
        }
    }



}
