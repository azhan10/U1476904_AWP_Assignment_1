<?php


/**
 * The controller is used to allow users to send me messages on regards of new film requests.
 * The controller requies the index and store operations.
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\blogs;

//use Mail;

//I added this library to the controller.
//The library allows raw queries to be executed in the controller.
use DB;


class newFilmController extends Controller
{
    /**
     * Display a listing of the resource.
     * The function is used to display all the messages which is stored in the database.
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      //Get all the blogs and subdivide the information into pages (13 messages per page)
        $blogs = blogs::orderBy('id','DESC')->paginate(13);
        //Display the structure in the index interface
        return view('newFilmsCRUD.index',compact('blogs'))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){}

    /**
     * Store a newly created resource in storage.
     * The function is used to store new messages from users.
     * The function uses validation processess to avoid blank inputs.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //The validation is used to avoid blank inputs
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
        ]);
        //Get the name, description from the interface.
        $name = $request->name;
        $description = $request->description;
        //Structure it in a array
        $data = array('name'=> $name,
            'description' => $description
            );
            //Add the new data to the database
        blogs::create($request->all());
        //Finally direct the user back to film index interface with a message stating that new film is recorded.
        return redirect()->route('newFilmsCRUD.index')
                        ->with('success','Film record  created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){}

}
