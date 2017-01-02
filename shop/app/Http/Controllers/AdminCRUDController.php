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
//I added this library to the controller.
//The library allows raw queries to be executed in the controller.
use DB;

class AdminCRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     * The funtion below is used to display all films stored in the MySQL database.
     * Also subdivide the films into 13 films per page.
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
      //SQL query to get all current films
    	$results = DB::select('select * from frs_films');
      //subdivide the films into pages (13 per page).
        $items = Frs_film::orderBy('id','DESC')->paginate(13);

      //Display film to index webpage
      return view('adminCRUD.index',compact('items'))
            ->with('i', ($request->input('page', 1) - 1) * 5)->with('filmsTitle', $results);
    }


    /**
     * Show the form for creating a new resource.
     * The function allows administrators to access the create page.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //Display the create webpage view.
      return view('adminCRUD.create');
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
        //Avoiding blank information
        $this->validate($request, [
            'filmtitle' => 'required',
            'filmdescription' => 'required',
            'filmdirector' => 'required',
            'filmrating' => 'required',
            'filmstarname' => 'required',
        ]);

        //Add current data to MySQL database
        Frs_film::create($request->all());

        //Direct the user to index webpage.
        return redirect()->route('adminCRUD.index')
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
      //Get current selected film id
        $item = Frs_film::find($id);
        //Using the id, show all the information stored in the database to the interface
        return view('adminCRUD.show',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     * The edit function is used to edit the selected information using the film id.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Get current film id.
        $item = Frs_film::find($id);

        //Diaplay the edit interface
        return view('adminCRUD.edit',compact('item'));
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
      //Here is the validation to avoid blank inputs
        $this->validate($request, [
            'filmdescription' => 'required',
            'filmdirector' => 'required',
            'filmtitle' => 'required',
            'filmrating' => 'required',
            'filmstarname' => 'required',
        ]);

        //Update the film id information using the inputted data
        Frs_film::find($id)->update($request->all());
        //Direct users to administrator index page.
        //It will also display a message that it was updated.
        return redirect()->route('adminCRUD.index')
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
      //Delete selected film information (using a button).
        Frs_film::find($id)->delete();
        //Direct users back to index page with a message.
        //The message confirms the delete operation was completed.
        return redirect()->route('adminCRUD.index')
                        ->with('success','Film record deleted successfully');
    }


}
