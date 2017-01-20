<?php

/**
 * The controller is used to allow users to rent films which are currently
 * stored in the database. For this controller, the store and show
 * function is used.
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\Frs_film;

use App\customerRents;

class customerRentController extends Controller
{

    /**
     * Display a listing of the resource.
     * The function is not used for this interface.
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
      //Function is not use
    }

    /**
     * Show the form for creating a new resource.
     * The function is not used for this interface.
     * @return \Illuminate\Http\Response
     */
    public function create(){
      //Function is not use
    }

    /**
     * Store a newly created resource in storage.
     * The function is used to store new information to the database.
     * The function also includes validation system to avoid blank inputs.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request){
         $this->validate($request, [
            'film_id' => 'required',
            'filmtitle' => 'required',
            'duration' => 'required',
            'customer_name' => 'required',
            'customer_Address' => 'required',
            'status' => 'required',
        ]);

         $FilmID = $request->film_id;
         //Add data to database
        customerRents::create($request->all());
        return redirect()->back()->with('returnFromRent/', [$FilmID])->with('success','Your film has been reserved. Please come to the store to get your rent copy.');
    }

    /**
     * Display the specified resource.
     * The function is used to show information of an film
     * The is used to make sure the user is choosing the correct film
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($filmid)

    {
      $customerRent = frs_film::find($filmid);
      $film_id = DB::select('select * from frs_films where id = :id', ['id' => $filmid]);
       return view('customerRent.show',compact('customerRent'))->with('film_id', $film_id);
    }

    /**
     * Show the form for editing the specified resource.
     * The function is not used for this interface.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
      //Function is not used.
    }

    /**
     * Update the specified resource in storage.
     * The function is not used for this interface.
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $filmid){
      //Function is not used.
    }

    /**
     * Remove the specified resource from storage.
     * The function is not used for this interface.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
      //Function is not used.
    }
}
