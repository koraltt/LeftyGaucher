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
            $value = $request->session()->get($model->id, 'shipping_address_id');
            return view('users.show', compact(['users' => $user]));
          
    }

        public function update($id){
            $user= User::find($id);
            $row = User::where($user)->update();
            return view('users.show', compact(['users' => $user]));

        }

        
}

class UserObserver {

    public function saved($model)
    {
        Log::info('Showing address: '.$model);
    }

}
?>