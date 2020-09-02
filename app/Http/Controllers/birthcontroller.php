<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\birthmodel;
use PDF;
class birthcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = birthmodel::all()->toArray();
        return view('AdminSide.Birth_Certificate.ShowBirthData', compact ('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service.birthCertificate.birth');
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

            'applicant_name' => 'required|alpha',
            'relation_child' => 'required|alpha',
            'applicant_cnic' => 'required|digits:13',
            'child_name' => 'required|string',
            'f_name' => 'required|string',
            'm_name' => 'required|string',
            'address' => 'required|string',
            'email' => 'required|email|ends_with:.com|unique:App\birthmodel,email',
            'cell_no' => 'required|max:11|min:11',
            'dob' => 'required|date',
            'gender' => 'required',
            'religion' => 'required|alpha',
            'district' => 'required',
            'g_father' => 'required|string',
            'g_cnic' => 'required|digits:13',
            'child_pic' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'cnic_pic' => 'required'
            
        ],[
            'name.alpha' => 'Applicant Name Must be Alphabetic Character Only',
            'applicant_name.required' => 'Please Enter Applicant Name',
            'dob.date' => 'Please Enter Right Date Formate',
            'applicant_cnic.required' => 'Please Enter Applicant CNIC Number',
            'applicant_cnic.digits' => 'Please Enter 13 Digits Applicant CNIC Number',
            'f_name.required' => 'Please Enter Applicant Father Name',
            'm_name.required' => 'Please Enter Applicant Mother Name',
            'email.required' => 'Please Enter Applicant Email Address',
            'email.unique' => 'This Email Address is Already Taken',
            'cell_no.required' => 'Please Enter Applicant Cell Number',
            'cell_no.max' => 'Please Enter Applicant 11 Digits Cell Number',
            'address.required' => 'Please Enter Applicant Home Address',
            'dob.required' => 'Please Enter Applicant Date Of Birth',
            'district.required' => 'Please Enter Applicant Home District',
            'child_name.required' => 'Please Enter Child Name',
            'relation_child.required' => 'Please Enter Applicant Relation With Child',
            'g_father.required' => 'Please Enter Child Grand Father Name',
            'religion.required' => 'Please Enter Applicant Child Religion',
            'g_cnic.required' => 'Please Enter Child Grand Father CNIC Number',
            'child_pic.required' => 'Please Upload Child Picture'
            
        ]);
        
        $student = new birthmodel([
            'applicant_name' => $request->get('applicant_name'),
            'relation_child' => $request->get('relation_child'),
            'applicant_cnic' => $request->get('applicant_cnic'),
            'address' => $request->get('address'),
            'email' => $request->get('email'),
            'cell_no' => $request->get('cell_no'),
            'dob' => $request->get('dob'),
            'gender' => $request->get('gender'),
            'g_father' => $request->get('g_father'),
            'g_cnic' => $request->get('g_cnic'),
            'religion' => $request->get('religion'),
            'district' => $request->get('district'),
            'child_name' => $request->get('child_name'),
            'f_name' => $request->get('f_name'),
            'm_name' => $request->get('m_name')
            
            
            
           
         ]);

         // single image upload
if($request->hasfile('child_pic')){
    $file = $request->file('child_pic');
    $extension= $file->getClientOriginalExtension();
    $filename= time() . '.' . $extension;
    $file->move('PFC/Birth_Certificate/Child_pic', $filename);
    $student->child_pic= $filename;
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
    $image->move(public_path('PFC/Birth_Certificate/CNIC'), $new_name);
    
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
        $student = birthmodel::find($id);
        return view ('AdminSide.Birth_Certificate.BirthPDF', compact('student','id'));
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
        $student = birthmodel::find($id);
        $pdf = PDF::loadView('AdminSide.Birth_Certificate.BirthPDF', ['student'=>$student]);
        $fileName = $student->name;
        return $pdf->stream('Birth_Certificate.pdf' . '.pdf');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = birthmodel::find($id);
        $student->delete();
        return redirect()->back()->with('success','Data was Deleted Successfully!');
    }
}
