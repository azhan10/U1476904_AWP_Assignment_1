<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Frs_film;

use App\filmreview;

use DB;


class FilmCRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request){
        $films = Frs_film::orderBy('id','ASC')->paginate(13);

        return view('FilmCRUD.index',compact('films'))->with('i', ($request->input('page', 1) - 1) * 5);
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(){
        $id = DB::select('select * from frs_films');
        return view('FilmCRUD.create',compact('films'))->with('id', $id);
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
            'description' => 'required',
            'review' => 'required',
        ]);

         $FilmID = $request->film_id;

        // echo $FilmID;
         
         filmreview::create($request->all());

       
        return redirect()->back()->with('reviewFilm/', [$FilmID])->with('success','Film record created successfully');
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($filmid)

    {

      $film = Frs_film::find($filmid);

      $filmReviews = DB::select('select * from filmreviews where film_id = :film_id', ['film_id' => $filmid]);

      $film_id = DB::select('select * from frs_films where id = :id', ['id' => $filmid]);

       return view('FilmCRUD.show',compact('film'))->with('filmReviews', $filmReviews)->with('film_id', $film_id);

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
