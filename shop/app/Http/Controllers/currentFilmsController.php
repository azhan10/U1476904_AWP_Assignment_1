<?php


/**
 * The controller is used to display all the film information
 * stored in the database to the interface.
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Frs_film;
use App\filmreview;

use DB;

class currentFilmsController extends Controller
{
    /**
     * Display a listing of the resource.
     * The function is used to display all film that are stored in the database
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
      //I'm getting the total number of current films (using count() function)
        $filmCount = DB::table('frs_films')->count();
        $curretFilms = Frs_film::orderBy('id','ASC')->paginate(13);
        return view('currentFilms.index',compact('curretFilms'))->with('i', ($request->input('page', 1) - 1) * 5)->with('filmCount', $filmCount);
    }

    /**
     * Show the form for creating a new resource.
     * The function is used to create a new review for a film.
     * The function directs itself to the store function where its adds the new data to the database.
     * @return \Illuminate\Http\Response
     */
    public function create(){
       $id = DB::select('select * from frs_films');
       return view('currentFilms.create',compact('films'))->with('id', $id);
    }

    /**
     * Store a newly created resource in storage.
     * The function is used to store the review to the database.
     * The function uses validation to avoid blank inputs.
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
         filmreview::create($request->all());
        return redirect()->back()->with('reviewFilm/', [$FilmID])->with('success','New review is added.');
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
      $showFilmInformation = Frs_film::find($filmid);
      $filmReviews = DB::select('select * from filmreviews where film_id = :film_id', ['film_id' => $filmid]);
      $film_id = DB::select('select * from frs_films where id = :id', ['id' => $filmid]);

      //I'm getting the total number of reviews (using count() function)
      $reviewCount = DB::table('filmreviews')->where('film_id', $filmid)->count();
      //I'm getting the average number of film reviews(using avg() function)
      $reviewAverage = DB::table('filmreviews')->where('film_id', $filmid)->avg('review');

      return view('currentFilms.show',compact('showFilmInformation'))->with('filmReviews', $filmReviews)->with('film_id', $film_id)->with('reviewCount', $reviewCount)->with('reviewAverage', $reviewAverage);
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
