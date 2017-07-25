<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Auth\User\User;
use Redirect;

class UserDataController extends Controller
{
    /**
     * Show the create new application form
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function newClientApplication()
    {
    	if(\Auth::guest()){
            return redirect('/login');              
        }
        else {           
            
            if( \Auth::user() ) {
            	
                return view('user.sections.new_client_application');
            }
            else {
                return Redirect::to('/'); 
            }  
        }
    }
    
    /**
     * Show the create new application form
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function newClientApplicationSubmit(Request $request)
    {
    	if(\Auth::guest()){
            return redirect('/login');              
        }
        else {           
            
            if( \Auth::user() ) {
            	
                return $request->all();
            }
            else {
                return Redirect::to('/'); 
            } 
			
        }
    }
    
    /**
     * Show the create new application form
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function accountSettings()
    {
    	if(\Auth::guest()){
            return redirect('/login');              
        }
        else {           
            
            if( \Auth::user() ) {
            	
                return view('user.sections.account_settings');
            }
            else {
                return Redirect::to('/'); 
            }  
        }
    }
}
