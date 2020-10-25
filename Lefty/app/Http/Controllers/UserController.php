<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function show($id){
        $user = User::findOrFail($id);
            return view('users.show', ['user' => $user]);
        }
}
