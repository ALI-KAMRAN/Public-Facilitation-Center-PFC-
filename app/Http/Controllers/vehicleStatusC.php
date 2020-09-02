<?php

namespace App\Http\Controllers;
use App\vehiclemodel;
use Illuminate\Http\Request;
use App\vehiclestatus;
class vehicleStatusC extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // check vehicle number is already taken or not??
        $this->validate($request, [
            
            'vehicle_no' => 'required|unique:App\vehicleStatus,vehicle_no'
            
        ],[
            'vehicle_no.unique' => 'Record found of this Vehicle'
        ]);

            
    return redirect()->back()->with('success','This Vehicle is no Record. Therefore this Vehicle is clear!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // fetch the CNIC number from database and return the character_status page
        $student = vehiclemodel::find($id);
        return view ('AdminSide.Vehicle_Verification.vehicle_status', compact('student','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // edit the character status
        $student = vehiclemodel::find($id);
        return view ('AdminSide.Vehicle_Verification.vehicle_status_enter', compact('student','id'));
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
         // Enter the character status and issue date into database
         $this->validate($request,[
            'status' => 'required',
            'issue_date' => 'required'
            
        ]);
        $student = vehiclemodel::find($id);
        $student->status = $request->get('status');
        $student->issue_date = $request->get('issue_date');
        
        $student->save();
        return redirect()->back()->with('success','Status was successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
