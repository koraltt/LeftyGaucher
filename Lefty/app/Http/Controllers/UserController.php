<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
           }
    
        public function show($name){
            $user = User::select('select * from users where name = ?',[$name]);
                return view('users.show', compact(['users' => $user]));
          
    }

        public function update($id){
            $user= User::find($id);
            $row = User::where($user)->update();
            return view('users.show', compact(['users' => $user]));

        }
}
