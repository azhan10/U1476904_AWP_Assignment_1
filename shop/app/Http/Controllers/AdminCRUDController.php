<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Frs_film;

use DB;

class AdminCRUDController extends Controller
{
    //
    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(Request $request)

    {

    	$results = DB::select('select * from frs_films');

        $items = Frs_film::orderBy('id','DESC')->paginate(13);



        return view('adminCRUD.index',compact('items'))

            ->with('i', ($request->input('page', 1) - 1) * 5)->with('filmsTitle', $results);

    }




    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('adminCRUD.create');

    }




    /**

     * Store a newly created resource in storage.

     *

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




        Frs_film::create($request->all());



        return redirect()->route('adminCRUD.index')

                        ->with('success','Film record created successfully');

    }




    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        $item = Frs_film::find($id);

        return view('adminCRUD.show',compact('item'));

    }




    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function edit($id)

    {

        $item = Frs_film::find($id);

        return view('adminCRUD.edit',compact('item'));

    }




    /**

     * Update the specified resource in storage.

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




        Frs_film::find($id)->update($request->all());



        return redirect()->route('adminCRUD.index')

                        ->with('success','Film record updated successfully');

    }




    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {

        Frs_film::find($id)->delete();

        return redirect()->route('adminCRUD.index')

                        ->with('success','Film record deleted successfully');

    }


}
