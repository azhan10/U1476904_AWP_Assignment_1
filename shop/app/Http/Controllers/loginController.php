<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\login;

use DB;

class loginController extends Controller
{
    //

    public function index(){
    	return view('loginAdmin.index',compact('login'));
    }


    public function store(Request $request)

    {

        $this->validate($request, [

            'username' => 'required',
            'password' => 'required',


        ]);


       // login::create($request->all());

        $username = $request->input('username');

        $password = $request->input('password');

        $result = DB::select('select * from login where username = :username AND password = :password', ['username' => $username, 'password'=> $password]);

        if($result == null){
        	return redirect()->route('loginAdmin.index')

                        ->with('fail','Login wrong');
        }else{
        	return redirect()->route('adminCRUD.index')

                        ->with('success','Account granted');
        }


        

    }
}
