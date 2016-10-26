<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\Frs_film;

use App\customerRents;

class customerRentController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request){
        
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(){
       
    }




    /**
     * Store a newly created resource in storage.
     *
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
         
        customerRents::create($request->all());

        return redirect()->back()->with('returnFromRent/', [$FilmID])->with('success','Your film has been reserved. Please come to the store to get your rent copy.');
    }




    /**
     * Display the specified resource.
     *
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
    public function update(Request $request, $filmid){}




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){}
}
