<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        return view('users.index',[
            'users' => \App\Models\User::all()
        ]);
    }

    public function show($id){
        return view('users.show',[
            'users' => \App\Models\User::find($id,)
        ]);
    }

    public function delete(Request $request, $id){
        $users = \App\Models\User::findOrFail($id);
        $users->delete();

        return redirect('/users');
    }
}
