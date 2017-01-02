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
      //Validation is used to avoid blank inputs
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

       // login::create($request->all());

       //Get the inputted username and password
        $username = $request->input('username');
        $password = $request->input('password');
        //Perform a query to check if inputted data is correct.
        $result = DB::select('select * from login where username = :username AND password = :password', ['username' => $username, 'password'=> $password]);
        //The condition is applied which depends on the details inserted.
        if($result == null){
          //Return fail message if the details does not match
        	return redirect()->route('loginAdmin.index')
                        ->with('fail','Login wrong');
        }else{
          //Return successfull if the details exists.
        	return redirect()->route('adminCRUD.index')
                        ->with('success','Account granted');
        }
    }
}
