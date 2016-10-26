<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Frs_film;

use App\customerRents;

use Carbon\Carbon;

class adminRentController extends Controller
{
    //
     /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(Request $request){

        $adminRents = customerRents::orderBy('id','DESC')->paginate(13);

        return view('adminRents.index',compact('adminRents'))->with('i', ($request->input('page', 1) - 1) * 5);
    }




    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {


    }




    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request){}




    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id){
        $rentRecords = customerRents::find($id);

        return view('adminRents.show',compact('adminRents'))->with('rentRecords', $rentRecords);

    }




    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function edit($id)

    {

        $currentRents = customerRents::find($id);

        return view('adminRents.edit',compact('currentRents'));

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

            'filmtitle' => 'required',

            'customer_name' => 'required',

            'customer_Address' => 'required',

            'status' => 'required',

            'duration' => 'required',

        ]);


        customerRents::find($id)->update($request->all());



        return redirect()->route('adminRents.index')->with('success','Rented information updated successfully');

    }




    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {
        customerRents::find($id)->delete();

        return redirect()->route('adminRents.index')->with('success','Rented information deleted successfully');

    }
}
