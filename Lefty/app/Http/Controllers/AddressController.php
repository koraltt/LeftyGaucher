<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;

class AddressController extends Controller
{   
    public function __construct(){
        $this->middleware('auth');
    }

    public function create(){
        return view('addresses.create');
            }

    public function store(Request $request){
        $address= new Address();
        $address->country = request('country');
        $address->province = request('province');
        $address->city = request('city');
        $address->postal_code= request('postal_code');
        $address->street = request('street');
        $address->house_num = request('house_num');
        $address->apt_num = request('apt_num');
            
        $address->save();
                
        return redirect('/users/{name}')->with('mssg', "L'adress' est sauvegardé");
        error_log($address);  
     }
}
