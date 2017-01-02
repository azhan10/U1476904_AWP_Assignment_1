<?php

/**
* The controller is used to allow users to send me new film request.
* The administrator can view the information and delete the information.
* All functions of the controller will not be used as...
* I only need the function to view information and delete information.
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\blogs;

class adminNewFilmsController extends Controller
{

    /**
     * Display a listing of the resource.
     * The index function is used to display all messages recieved from users.
     * The information is subdived into pages (13 messages per page).
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      //The code below is used to subdivde the messages to pages (13 per page).
        $blogs = blogs::orderBy('id','DESC')->paginate(13);
        //Display the index interface with the messages in the pagnated format
        return view('adminNewFilms.index',compact('blogs'))->with('i', ($request->input('page', 1) - 1) * 5);
    }




    /**
     * Show the form for creating a new resource.
     * The function is not used for this interface.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
      // Function is not used.
    }




    /**
     * Store a newly created resource in storage.
     * The function is not used for this interface.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        // Function is not used.
    }




    /**
     * Display the specified resource.
     * The function is used to view more information of a film.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       //Get the selected id
        $blogs = blogs::find($id);
        //Display the information on the show interface.
        return view('adminNewFilms.show',compact('blogs'));
    }




    /**
     * Show the form for editing the specified resource.
     * The function is not used for this interface.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Function is not used.
    }




    /**
     * Update the specified resource in storage.
     * The function is not used for this interface.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      // Function is not used.
    }




    /**
     * Remove the specified resource from storage.
     * The function is used to delete a messages from the interface.
     * The delete function requires the id of the film.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      //Get id and delete the information
        blogs::find($id)->delete();
      //Direct the user to the index page and display a notification that the delete has been sucessfull
      return redirect()->route('adminNewFilms.index')->with('success','Film recommendation deleted successfully');
    }


}
