<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\Http\Request;
use App\crimemodel;
class crimecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = crimemodel::all()->toArray();
        return view('AdminSide.Crime Report.showcrimedata', compact ('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service.Crime_Report.crime');
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
            'f_name' => 'required|string',
            'email' => 'required|email|ends_with:.com|unique:App\crimemodel,email',
            'cell_no' => 'required|max:11|min:11',
            'address' => 'required|string',
            'dob' => 'required|date',
             'gender' => 'required',

              'crime_type' => 'required',
               'district' => 'required',
             'crime_detail' => 'required',
             'applicant_pic' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
             'pic' => 'required',
            
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
            'district.required' => 'Please Enter Applicant Home District',
            'crime_type.required' => 'Please Select Crime Type',
            'crime_detail.required' => 'Please Enter Crime Detail',
            'applicant_pic.required' => 'Please Select Applicant Picture'

        ]);
        
        $student = new crimemodel([
            'name' => $request->get('name'),
            'cnic' => $request->get('cnic'),
            'f_name' => $request->get('f_name'),
            'email' => $request->get('email'),
            'cell_no' => $request->get('cell_no'),
            'address' => $request->get('address'),
            'dob' => $request->get('dob'),
             'gender' => $request->get('gender'),

            'crime_type' => $request->get('crime_type'),
            'district' => $request->get('district'),
             'crime_detail' => $request->get('crime_detail')
             
]);

// multiple image upload
$image_code='';
$images = $request->file('pic');
foreach($images as $image){
    $new_name = rand() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('PFC/Crime_Report/CNIC Pics'), $new_name);
    
}
// end multiple image upload

// single image upload
if($request->hasfile('applicant_pic')){
    $file = $request->file('applicant_pic');
    $extension= $file->getClientOriginalExtension();
    $filename= time() . '.' . $extension;
    $file->move('PFC/Crime_Report/Applicant_pic', $filename);
    $student->applicant_pic= $filename;
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
        $student = crimemodel::find($id);
        return view ('AdminSide.Crime Report.crimePDF', compact('student','id'));
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
        $student = crimemodel::find($id);
        $pdf = PDF::loadView('AdminSide.Crime Report.crimePDF', ['student'=>$student]);
        $fileName = $student->name;
        return $pdf->stream('Crime_Report.pdf' . '.pdf');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = crimemodel::find($id);
        $student->delete();
        return redirect()->back()->with('success','Data was Deleted Successfully!');
    }
}
