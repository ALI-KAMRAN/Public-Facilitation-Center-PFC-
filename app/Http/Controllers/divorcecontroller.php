<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\Http\Request;
use App\divorcemodel;
class divorcecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = divorcemodel::all()->toArray();
        return view('AdminSide.Divorce_Certificate.showdivorcedata', compact ('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service.divorce_certificate.divorce');
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

            'g_name' => 'required|alpha',
            'g_cnic' => 'required|digits:13',
            'g_f_name' => 'required|string',
            'g_religion' => 'required',
            'email' => 'required|email|ends_with:.com|unique:App\divorcemodel,email',
            'cell_no' => 'required|max:11|min:11',
            'g_address' => 'required|string',
            'g_dob' => 'required|date',
            'g_status' => 'required',
            'g_tehsil' => 'required|string',
            'g_district' => 'required',
             'b_name' => 'required|string',
            'b_cnic' => 'required|digits:13',
            'b_f_name' => 'required|string',
            'b_religion' => 'required',
            'b_address' => 'required|string',
            'b_dob' => 'required|date',
            'b_status' => 'required',
            'b_tehsil' => 'required|string',
            'b_district' => 'required',
             'divorce_namma' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'b_nationality' => 'required',
            'g_nationality' => 'required',
            'divorce_namma' => 'required',
            
        ],[
            'g_name.alpha' => 'Applicant Name Must be Alphabetic Character Only',
            'g_name.required' => 'Please Enter Groom Name',
            'g_dob.date' => 'Please Enter Right Date Formate',
            'g_cnic.required' => 'Please Enter Groom CNIC Number',
            'g_cnic.digits' => 'Please Enter 13 Digits Groom CNIC Number',
            'g_f_name.required' => 'Please Enter Groom Father Name',
            'g_religion.required' => 'Please Enter Groom Religion',
            'email.required' => 'Please Enter Applicant Email Address',
            'email.unique' => 'This Email Address is Already Taken',
            'cell_no.required' => 'Please Enter Applicant Cell Number',
            'cell_no.max' => 'Please Enter Applicant 11 Digits Cell Number',
            'g_address.required' => 'Please Enter Groom Home Address',
            'g_dob.required' => 'Please Enter Groom Date Of Birth',
            'g_district.required' => 'Please Enter Groom Home District',
            'g_tehsil.required' => 'Please Enter Groom Tehsil',
            'b_name.required' => 'Please Enter Bridle Name',
            'b_dob.date' => 'Please Enter Right Date Formate',
            'b_cnic.required' => 'Please Enter Bridle CNIC Number',
            'b_cnic.digits' => 'Please Enter 13 Digits Bridle CNIC Number',
            'b_f_name.required' => 'Please Enter Bridle Father Name',
            'b_address.required' => 'Please Enter Bridle Home Address',
            'b_dob.required' => 'Please Enter Bridle Date Of Birth',
            'b_district.required' => 'Please Enter Bridle Home District',
            'b_religion.required' => 'Please Enter Bridle Religion',
            'b_tehsil.required' => 'Please Enter Bridle Tehsil',
            'marriage_date.required' => 'Please Enter Marriage Date',
            'marriage_date.date' => 'Please Enter Right Marriage Date Formate',
            'solemnized_name.required' => 'Please Enter Solemnized Name',
            'solemnized_cnic.required' => 'Please Enter Solemnized CNIC Number',
            'solemnized_cnic.digits' => 'Please Enter 13 Digits Solemnized CNIC Number',
            'b_nationality.required' => 'Please Enter Bridle Nationality',
            'g_nationality.required' => 'Please Enter Groom Nationality',
            'divorce_namma.required' => 'Please Upload Divorce Namma'

        ]);
        
        $student = new divorcemodel([
            'g_name' => $request->get('g_name'),
            'g_cnic' => $request->get('g_cnic'),
            'g_f_name' => $request->get('g_f_name'),
            'g_religion' => $request->get('g_religion'),
            'email' => $request->get('email'),
            'cell_no' => $request->get('cell_no'),
            'g_address' => $request->get('g_address'),
            'g_dob' => $request->get('g_dob'),
            'g_status' => $request->get('g_status'),
            'g_tehsil' => $request->get('g_tehsil'),
            'g_district' => $request->get('g_district'),
            'b_name' => $request->get('b_name'),
            'b_cnic' => $request->get('b_cnic'),
            'b_f_name' => $request->get('b_f_name'),
            'b_religion' => $request->get('b_religion'),
            'b_address' => $request->get('b_address'),
            'b_dob' => $request->get('b_dob'),
            'b_status' => $request->get('b_status'),
            'b_tehsil' => $request->get('b_tehsil'),
            'b_district' => $request->get('b_district'),
            
            'b_nationality' => $request->get('b_nationality'),
            'g_nationality' => $request->get('g_nationality')
            ]);

// single image upload
if($request->hasfile('divorce_namma')){
    $file = $request->file('divorce_namma');
    $extension= $file->getClientOriginalExtension();
    $filename= time() . '.' . $extension;
    $file->move('PFC/Divorce_Certificate/Divorce_Namma', $filename);
    
}
else{
    echo "not";

}
// end single image upload

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
        $student = divorcemodel::find($id);
        return view ('AdminSide.Divorce_Certificate.divorcePDF', compact('student','id'));
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
        $student = divorcemodel::find($id);
        $pdf = PDF::loadView('AdminSide.Divorce_Certificate.divorcePDF', ['student'=>$student]);
        $fileName = $student->name;
        return $pdf->stream('Divorce_Certificate.pdf' . '.pdf');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = divorcemodel::find($id);
        $student->delete();
        return redirect()->back()->with('success','Data was Deleted Successfully!');
    }
}
