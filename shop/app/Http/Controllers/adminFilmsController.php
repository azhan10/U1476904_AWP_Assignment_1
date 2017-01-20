<?php
/**
* The following controller is used to determine the CRUD operation on films.
* The only user that has this power is the administrator.
* The controller also contains several validation functions to allow restriction on given data.
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Frs_film;

use DB;

class adminFilmsController extends Controller
{
    /**
     * Display a listing of the resource.
     * The funtion below is used to display all films stored in the MySQL database.
     * Also subdivide the films into 13 films per page.
     * It also returns the number of films that are stored in the database
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
      //Get all current films from the database
    	$getAllFilms = DB::select('select * from frs_films');
      $films = Frs_film::orderBy('id','DESC')->paginate(13);
      //I'm getting the total number of films (using count() function)
      $filmCount = DB::table('frs_films')->count();
      return view('adminFilms.index',compact('films'))
            ->with('i', ($request->input('page', 1) - 1) * 5)->with('filmsTitle', $getAllFilms)->with('filmCount', $filmCount);
    }


    /**
     * Show the form for creating a new resource.
     * The function allows administrators to access the create page.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('adminFilms.create');
    }

    /**
     * Store a newly created resource in storage.
     * The function is used to stored the current data to the database and then direct the user to index interface.
     * The function also include validation system to avoid blank information.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'filmtitle' => 'required',
            'filmdescription' => 'required',
            'filmdirector' => 'required',
            'filmrating' => 'required',
            'filmstarname' => 'required',
        ]);

        //Create new row in the database
        Frs_film::create($request->all());

        return redirect()->route('adminFilms.index')
                        ->with('success','Film record created successfully');
    }

    /**
     * Display the specified resource.
     * The function is the purpose of the show interface which is used to
     * display further information of an film such as film star name.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $moreFilmInformation = Frs_film::find($id);
        return view('adminFilms.show',compact('moreFilmInformation'));
    }

    /**
     * Show the form for editing the specified resource.
     * The edit function is used to edit the selected information using the film id.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editFilmInformation = Frs_film::find($id);
        return view('adminFilms.edit',compact('editFilmInformation'));
    }

    /**
     * Update the specified resource in storage.
     * The update funtion is used to update information of an film.
     * This is activated when a user edit information of a film in the edit interface.
     * The function also include validation system to avoid blank inputs.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'filmdescription' => 'required',
            'filmdirector' => 'required',
            'filmtitle' => 'required',
            'filmrating' => 'required',
            'filmstarname' => 'required',
        ]);

        //Update information
        Frs_film::find($id)->update($request->all());
        return redirect()->route('adminFilms.index')
                        ->with('success','Film record updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     * The function is used to delete a selected film id
     * and then direct the user back to index page.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Frs_film::find($id)->delete();
        return redirect()->route('adminFilms.index')
                        ->with('success','Film record deleted successfully');
    }


}
