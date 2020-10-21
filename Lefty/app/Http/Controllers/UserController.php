<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Session;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
           }
    
        public function show(Request $request, $name){
            $user = User::find($name);
            return view('users.show', compact(['users' => $user]));  
    }
        
}

?>