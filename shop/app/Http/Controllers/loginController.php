<?php


/**
 * The controller is used to allow adminstrator to log in before accessing any of the features.
 * The controller is used to determine if the current user is the administrator.
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

//The controller uses one which handles the administrator accounts details
use App\login;

//I added this library to the controller.
//The library allows raw queries to be executed in the controller.
use DB;

class loginController extends Controller
{

    /**
    * The index function is ised to direct the user to the index interface
    */
    public function index(){
    	return view('loginAdmin.index',compact('login'));
    }

    /**
    * The store function is used to log the adminstrator into his/her account.
    * The function includes validation system to avoid blank inputs.
    * The function also includes an condition which depends if the account details matches the database.
    * if the information is correct, then your are granted (with a messages), otherwise, you will get message stating the account details is wrong.
    */
    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

       // login::create($request->all());

        $username = $request->input('username');
        $password = $request->input('password');
        $checkInformation = DB::select('select * from login where username = :username AND password = :password', ['username' => $username, 'password'=> $password]);
        //Check if information is true or false
        if($checkInformation == null){
        	return redirect()->route('loginAdmin.index')
                        ->with('fail','Login wrong');
        }else{
        	return redirect()->route('adminFilms.index')
                        ->with('success','Account granted');
        }
    }
}
