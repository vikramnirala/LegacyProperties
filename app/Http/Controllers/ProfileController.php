<?php

namespace App\Http\Controllers;

use App\Models\Auth\Role\Role;
use App\Notifications\Auth\ConfirmEmail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Models\Auth\User\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Ramsey\Uuid\Uuid;

class ProfileController extends Controller
{
    // show profile
    public function show(){
    	if(\Auth::guest()){
            return redirect('/login');              
        }
        else {           
            
            if( \Auth::user() ) {
            	
                return View::make('user.sections.profile');
            }
            else {
                return Redirect::to('/'); 
            }  
        }
    	
    }

    // update profile
    public function update(Request $request){
    	$data = $request->all();
        //print_r($data);
    	User::where('id', $data['id'])
            ->update([
	            'phone' => $data['phone'],
	            'email' => $data['email'],
	            'street_address' => $data['street_address'],
	            'city' => $data['city'],
	            'state' => $data['state'],
	            'zip' => $data['zip']
            ]);
    	return redirect('/profile');
    }
    
    // update profile password
    public function updatePassword(Request $request){
    	$data = $request->all();
        //print_r($data);
        
    	User::where('id', $data['id'])
            ->update([
	            'password' => $data['password']
            ]);
    	return redirect('/profile');
    }

}
