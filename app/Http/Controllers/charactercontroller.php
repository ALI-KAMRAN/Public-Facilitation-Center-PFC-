<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\Http\Request;
use App\charactermodel;
class charactercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = charactermodel::all()->toArray();
        return view('AdminSide.Character_Certificate.showcharacterdata', compact ('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service.character_certificate.character_certificate');
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
            'father_name' => 'required|string',
            'from' => 'required|date',
            'to' => 'required|date',
            'pic' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'cnic' => 'required|digits:13',
            'address' => 'required|string',
            'email_address' => 'required|email|ends_with:.com|unique:App\charactermodel,email',
            'cell_number' => 'required|max:11|min:11',
            'birthday' => 'required|date',
            'gender' => 'required',
            'purpose' => 'required',
            'district' => 'required',
            'police_station' => 'required',
            'cnic_pic' => 'required',
        ],[
            'name.alpha' => 'Applicant Name Must be Alphabetic Character Only',
            'applicant_name.required' => 'Please Enter Applicant Name',
            'birthday.date' => 'Please Select Right Date Formate',
            'cnic.required' => 'Please Enter Applicant CNIC Number',
            'cnic.digits' => 'Please Enter 13 Digits Applicant CNIC Number',
            'father_name.required' => 'Please Enter Applicant Father Name',
            'email_address.required' => 'Please Enter Applicant Email Address',
            'email_address.unique' => 'This Email Address is Already Taken',
            'cell_number.required' => 'Please Enter Applicant Cell Number',
            'cell_number.max' => 'Please Enter Applicant 11 Digits Cell Number',
            'address.required' => 'Please Enter Applicant Home Address',
            'birthday.required' => 'Please Enter Applicant Date Of Birth',
            'gender.required' => 'Please Select Applicant Gender',
            'district.required' => 'Please Enter Applicant Home District',
            'pic.required' => 'Please Upload Applicant Picture',
            'purpose.required' => 'Please Enter Character Purpose',
            'police_station.required' => 'Please Select Police Station',
            'from.required' => 'Please Enter Character Purpose',
            'to.required' => 'Please Enter Character Purpose',
            'from.date' => 'Please Select Right Date Formate Where Start Date',
            'to.date' => 'Please Enter Character Purpose Where End Date'
        ]);
        
        $student = new charactermodel([
            'applicant_name' => $request->get('applicant_name'),
            'father_name' => $request->get('father_name'),
            'cnic' => $request->get('cnic'),
            'address' => $request->get('address'),
            'email_address' => $request->get('email_address'),
            'cell_number' => $request->get('cell_number'),
            'birthday' => $request->get('birthday'),
            'gender' => $request->get('gender'),
            'purpose' => $request->get('purpose'),
            'from' => $request->get('from'),
            'to' => $request->get('to'),
            'district' => $request->get('district'),
            'police_station' => $request->get('police_station'),
            'passport' => $request->get('passport_#')
            
            
            
           
         ]);

// single image upload
if($request->hasfile('pic')){
    $file = $request->file('pic');
    $extension= $file->getClientOriginalExtension();
    $filename= time() . '.' . $extension;
    $file->move('PFC/Character_Certificate/Applicant_pic', $filename);
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
    $image->move(public_path('PFC/Character_Certificate/Applicant_CNIC'), $new_name);
    
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
    public function show()
    {
        
    }
        
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = charactermodel::find($id);
        return view ('AdminSide.Character_Certificate.characterPDF', compact('student','id'));
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
        
        $student = charactermodel::find($id);
        $pdf = PDF::loadView('AdminSide.Character_Certificate.characterPDF', ['student'=>$student]);
        $fileName = $student->name;
        return $pdf->stream('Character_Certificate.pdf' . '.pdf');
    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = charactermodel::find($id);
        $student->delete();
        return redirect()->back()->with('success','Data was Deleted Successfully!');
    }




}
