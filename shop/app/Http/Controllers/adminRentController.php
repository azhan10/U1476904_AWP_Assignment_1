<?php

/**
 * The controller handles all the operation for film rental system.
 * User can rent a film, the administrator can view all rental request and process their order.
 * The adminstrator can view, update and destroy information.
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//I added this library to the controller.
//The library allows raw queries to be executed in the controller.
use DB;

use App\Frs_film;

use App\customerRents;

use Carbon\Carbon;

class adminRentController extends Controller
{

     /**
     * Display a listing of the resource.
     * The function (index) is used to ciew all the customers film rentals
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){

        $adminRents = customerRents::orderBy('id','DESC')->paginate(13);

        return view('adminRents.index',compact('adminRents'))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     * The function is not used for this interface.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //Function is not use
    }

    /**
     * Store a newly created resource in storage.
     * The function is not used for this interface.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request){
      //Function is not use
    }

    /**
     * Display the specified resource.
     * The show function is used to display further information of a film rental
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
      //Get the rental id
        $rentRecords = customerRents::find($id);
        //Display the rental information on the show interface
        return view('adminRents.show',compact('adminRents'))->with('rentRecords', $rentRecords);
    }

    /**
     * Show the form for editing the specified resource.
     * The edit function is used to update the rental status of a film.
     * Adminstrator can update other information but its mainly for updating the rental status.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      //Get the rental id
        $currentRents = customerRents::find($id);
        //Display current information in the database to the interface.
        //User can then start editing information.
        return view('adminRents.edit',compact('currentRents'));

    }

    /**
     * Update the specified resource in storage.
     * The function is used to update new information in the database.
     * The function updates rental information.
     * The function also includes validation system to avoid blank inputs.
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      //Validation code to avoid blank inputs
        $this->validate($request, [
            'filmtitle' => 'required',
            'customer_name' => 'required',
            'customer_Address' => 'required',
            'status' => 'required',
            'duration' => 'required',
        ]);
        //Get the current id and update the information
        customerRents::find($id)->update($request->all());
        //If update is successfull, it direct the user back to the index with a notification that the update was sucessfull
        return redirect()->route('adminRents.index')->with('success','Rented information updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     * The function is used to delete rental information.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      //Get the current id and find it in the database
        customerRents::find($id)->delete();
        //Once completed, it will direct the user to the index interface with a messages stating the delete was sucessfull.
        return redirect()->route('adminRents.index')->with('success','Rented information deleted successfully');
    }
}
