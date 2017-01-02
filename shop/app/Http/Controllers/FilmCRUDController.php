<?php


/**
 * The controller is used to display all the film information
 * stored in the database to the interface.
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

//The controller require two models; one model displays the films
//The other model is used to do database interactions with the film review table
use App\Frs_film;
use App\filmreview;
//I added this library to the controller.
//The library allows raw queries to be executed in the controller.
use DB;

class FilmCRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     * The function is used to display all film that are stored in the database
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        $films = Frs_film::orderBy('id','ASC')->paginate(13);
        return view('FilmCRUD.index',compact('films'))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     * The function is used to create a new review for a film.
     * The function directs itself to the store function where its adds the new data to the database.
     * @return \Illuminate\Http\Response
     */
    public function create(){
       //Get the current film id
       $id = DB::select('select * from frs_films');
       //Direct to the create interface with this film id.
       return view('FilmCRUD.create',compact('films'))->with('id', $id);
    }

    /**
     * Store a newly created resource in storage.
     * The function is used to store the review to the database.
     * The function uses validation to avoid blank inputs.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
      //Validation is used to avoid blank inputs
       $this->validate($request, [
            'film_id' => 'required',
            'filmtitle' => 'required',
            'description' => 'required',
            'review' => 'required',
        ]);
        //Get the film id
         $FilmID = $request->film_id;
         //Store the information to the database
         filmreview::create($request->all());
        //Direct the user to the same interface
        return redirect()->back()->with('reviewFilm/', [$FilmID])->with('success','Film record created successfully');
    }

    /**
     * Display the specified resource.
     * The function is used to display more information of an film.
     * Extra information include film star name.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($filmid)
    {
      //Get the film id
      $film = Frs_film::find($filmid);
      //Do raw quries to retrieve all current film reviews and film information (using the film id).
      $filmReviews = DB::select('select * from filmreviews where film_id = :film_id', ['film_id' => $filmid]);
      $film_id = DB::select('select * from frs_films where id = :id', ['id' => $filmid]);
      //The code below returns the user to the same interface with the film information and reviews.
      return view('FilmCRUD.show',compact('film'))->with('filmReviews', $filmReviews)->with('film_id', $film_id);
    }

    /**
     * Show the form for editing the specified resource.
     * Function is not used.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){}

    /**
     * Update the specified resource in storage.
     * Function is not used.
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $filmid){}

    /**
     * Remove the specified resource from storage.
     * Function is not used.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){}
}
