<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
           }
    
        public function show($name){
            $profile = Profile::find($name);
                return view('profiles.show', compact('profile'));
         
    }
}
