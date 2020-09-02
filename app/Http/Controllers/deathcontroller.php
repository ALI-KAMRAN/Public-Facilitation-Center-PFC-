<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\Http\Request;
use App\deathmodel;
class deathcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = deathmodel::all()->toArray();
        return view('AdminSide.Death_Certificate.showdeathdata', compact ('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service.death_certificate.death');
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

            'name' => 'required|alpha',
            'cnic' => 'required|digits:13',
            'religion' => 'required|alpha',
            'email' => 'required|email|ends_with:.com|unique:App\deathmodel,email',
            'cell_no' => 'required|max:11|min:11',
            'address' => 'required|string',
            'dob' => 'required|date',
            'gender' => 'required',
             'f_name' => 'required|string',
            'f_cnic' => 'required|digits:13',
            'm_name' => 'required|string',
            'm_cnic' => 'required|digits:13',
            'death_place' => 'required|string',
            'reason' => 'required',
            'death_date' => 'required|date',
            'nationality' => 'required|alpha'
            
            
        ],[
            'name.alpha' => 'Applicant Name Must be Alphabetic Character Only',
            'name.required' => 'Please Enter Applicant Name',
            'dob.date' => 'Please Enter Right Date Formate',
            'cnic.required' => 'Please Enter Applicant CNIC Number',
            'cnic.digits' => 'Please Enter 13 Digits Applicant CNIC Number',
            'f_name.required' => 'Please Enter Applicant Father Name',
            'email.required' => 'Please Enter Applicant Email Address',
            'email.unique' => 'This Email Address is Already Taken',
            'cell_no.required' => 'Please Enter Applicant Cell Number',
            'cell_no.max' => 'Please Enter Applicant 11 Digits Cell Number',
            'address.required' => 'Please Enter Applicant Home Address',
            'dob.required' => 'Please Enter Applicant Date Of Birth',
            'gender.required' => 'Please Select Applicant Gender',
            'f_cnic.required' => 'Please Enter Applicant Father CNIC',
            'f_cnic.digits' => 'Please Enter 13 Digits Applicant Father CNIC Number',
            'm_name.required' => 'Please Enter Applicant Mother Name',
            'm_cnic.required' => 'Please Enter Applicant Mother CNIC Number',
            'm_cnic.digits' => 'Please Enter 13 Digits Applicant Mother CNIC Number',
            'death_place.required' => 'Please Enter Death Place',
            'reason.digits' => 'Please Select Death Reason',
            'death_date.required' => 'Please Select Death Date',
            'death_date.date' => 'Please Enter Right Date Formate For Death Date',
            'nationality.required' => 'Please Enter Applicant Nationality'

        ]);
        
        $student = new deathmodel([
            'name' => $request->get('name'),
            'cnic' => $request->get('cnic'),
            'f_name' => $request->get('f_name'),
            'f_cnic' => $request->get('f_cnic'),
            'email' => $request->get('email'),
            'cell_no' => $request->get('cell_no'),
            'address' => $request->get('address'),
            'dob' => $request->get('dob'),
            'gender' => $request->get('gender'),
            'm_name' => $request->get('m_name'),
            'm_cnic' => $request->get('m_cnic'),
            'death_place' => $request->get('death_place'),
            'reason' => $request->get('reason'),
            'religion' => $request->get('religion'),
           'nationality' => $request->get('nationality'),
           'death_date' => $request->get('death_date')
            ]);


 $student->save();
return redirect()->back()->with('success','Data was Successfully Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = deathmodel::find($id);
        return view ('AdminSide.Death_Certificate.deathPDF', compact('student','id'));
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
        $student = deathmodel::find($id);
        $pdf = PDF::loadView('AdminSide.Death_Certificate.deathPDF', ['student'=>$student]);
        $fileName = $student->name;
        return $pdf->stream('Death_Certificate.pdf' . '.pdf');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = deathmodel::find($id);
        $student->delete();
        return redirect()->back()->with('success','Data was Deleted Successfully!');
    }
}
