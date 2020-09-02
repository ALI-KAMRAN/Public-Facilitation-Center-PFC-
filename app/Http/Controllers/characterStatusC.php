<?php

namespace App\Http\Controllers;
use App\charactermodel;
use Illuminate\Http\Request;
use App\characterStatus;
class characterStatusC extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // character certificate status page show
        return view('AdminSide.character_certificate.character_status');
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
    public function store(Request $request)
    {
        // check CNIC number is already taken or not??
        $this->validate($request, [
            'cnic' => 'required|digits:13|unique:App\characterStatus,cnic'
            
        ],[
            'cnic.unique' => 'This Applicant is Criminal!'
        ]);

           
    return redirect()->back()->with('success','This Applicant is not Criminal');
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
        $student = charactermodel::find($id);
        return view ('AdminSide.Character_Certificate.character_status', compact('student','id'));
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
        $student = charactermodel::find($id);
        return view ('AdminSide.Character_Certificate.character_status_enter', compact('student','id'));
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
        $student = charactermodel::find($id);
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
