<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< Updated upstream
use App\Models\User;
use App\Models\Session;
=======
>>>>>>> Stashed changes

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
<<<<<<< Updated upstream
           }
    
        public function show(Request $request, $name){
            $user = User::find($name);
            return view('users.show', compact(['users' => $user]));  
    }
        
}

?>
=======
    }

    public function show($id){
        $user = User::findOrFail($id);
            return view('users.show', ['user' => $user]);
        }
}
>>>>>>> Stashed changes
