<?php


/**
 * The controller is used to allow users to send me messages on regards of new film requests.
 * The controller requies the index and store operations.
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\blogs;

use DB;


class newFilmRequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     * The function is used to display all the messages which is stored in the database.
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $currentFilmRequests = blogs::orderBy('id','DESC')->paginate(13);
        return view('newFilmRequests.index',compact('currentFilmRequests'))->with('i', ($request->input('page', 1) - 1) * 5);
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
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
        ]);
        $name = $request->name;
        $description = $request->description;
        $data = array('name'=> $name,
            'description' => $description
            );
            //Create information to the 'blogs' database table
        blogs::create($request->all());
        return redirect()->route('newFilmRequests.index')
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
