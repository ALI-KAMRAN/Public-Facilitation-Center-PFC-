<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\Http\Request;
use App\licensemodel;
class licensecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = licensemodel::all()->toArray();
        return view('AdminSide.Driving License.showlicensedata', compact ('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service.Driving License.license');
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

            'name' => 'required|string',
            'cnic' => 'required|digits:13',
            'f_name' => 'required|string',
             'email' => 'required|email|ends_with:.com|unique:App\licensemodel,email',
            'cell_no' => 'required|max:11|min:11',
            'address' => 'required|string',
            'dob' => 'required|date',
            'blood_group' => 'required',
            'gender' => 'required',
            'license_type' => 'required',
            'pic' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'cnic_pic' => 'required'
        ],[

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
            'blood_group.required' => 'Please Select Applicant Blood Group',
            'license_type.required' => 'Please Select License Type',
            'pic.required' => 'Please Select Applicant Picture'

        ]);
        
        $student = new licensemodel([
            'name' => $request->get('name'),
            'cnic' => $request->get('cnic'),
            'f_name' => $request->get('f_name'),
            'email' => $request->get('email'),
            'cell_no' => $request->get('cell_no'),
            'address' => $request->get('address'),
            'dob' => $request->get('dob'),
            'blood_group' => $request->get('blood_group'),
            'gender' => $request->get('gender'),
            'license_type' => $request->get('license_type')
             ]);

// single image upload
if($request->hasfile('pic')){
    $file = $request->file('pic');
    $extension= $file->getClientOriginalExtension();
    $filename= time() . '.' . $extension;
    $file->move('PFC/Driving_License/Applicant_Pic', $filename);
    $student->pic= $filename;
}
else{
    echo "not";

}
// end single image upload

// multiple image upload
$image_code='';
$images = $request->file('cnic_pic');
foreach($images as $image){
    $new_name = rand() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('PFC/Driving_License/Applicant_CNIC'), $new_name);
    
}
// end multiple image upload

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
        $student = licensemodel::find($id);
        return view ('AdminSide.Driving License.licensePDF', compact('student','id'));
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
        $student = licensemodel::find($id);
        $pdf = PDF::loadView('AdminSide.Driving License.licensePDF', ['student'=>$student]);
        $fileName = $student->name;
        return $pdf->stream('Driving_License.pdf' . '.pdf');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = licensemodel::find($id);
        $student->delete();
        return redirect()->back()->with('success','Data was Deleted Successfully!');
    }
}
