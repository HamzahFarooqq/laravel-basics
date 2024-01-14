<?php

namespace App\Http\Controllers\Api;


use App\Models\User;
use App\Http\Controllers\Controller;
use Symfony\Component\Console\Input\Input;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();

        return response()->json($users);
    }


    // store
    public function store(request $request)
    {
        $user = User::create($request->all());

        return $user;
    }

    // show
    public function show($id)
    {
        $user = User::find($id);

        return response()->json($user);
    }

    // update
    public function update(Request $request, $id)
    {

        $user = User::find($id);

        // return "adil";

        $user->update([
            'name'  =>  $request->name,
            'email'  =>  $request->email
        ]);
       

    }

    // delete
    public function delete($id)
    {
        $user = User::find($id);

        $user->delete();
    }


}
