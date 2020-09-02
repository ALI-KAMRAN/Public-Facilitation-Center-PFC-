<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\Http\Request;
use App\lossmodel;
class losscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = lossmodel::all()->toArray();
        return view('AdminSide.Loss Report.showlossdata', compact ('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service.Loss Report.loss');
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
            'email' => 'required|email|ends_with:.com|unique:App\lossmodel,email',
            'cell_no' => 'required|max:11|min:11',
            'address' => 'required|string',
            'dob' => 'required|date',
             'gender' => 'required',

            'lost_item' => 'required',
            'loss_detail' => 'required|string',
             'lost_area' => 'required|string',
             'lost_district' => 'required',
             'police_station' => 'required',
             'applicant_pic' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
             'pic' => 'required'
            
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
             'lost_item.required' => 'Please Enter Lost Item',
            'loss_detail.required' => 'Please Enter Loss Detail',
            'lost_area.required' => 'Please Enter Lost Area',
            'lost_district.required' => 'Please Select Lost District',
            'police_station.required' => 'Please Select Police Station',
            'applicant_pic.required' => 'Please Enter Select Applicant Pic'

        ]);
        
        $student = new lossmodel([
            'name' => $request->get('name'),
            'cnic' => $request->get('cnic'),
            'f_name' => $request->get('f_name'),
            'email' => $request->get('email'),
            'cell_no' => $request->get('cell_no'),
            'address' => $request->get('address'),
            'dob' => $request->get('dob'),
             'gender' => $request->get('gender'),
            'lost_item' => $request->get('lost_item'),
            'loss_detail' => $request->get('loss_detail'),
             'lost_area' => $request->get('lost_area'),
              'lost_district' => $request->get('lost_district'),
              'police_station' => $request->get('police_station')
]);

// multiple image upload
$image_code='';
$images = $request->file('pic');
foreach($images as $image){
    $new_name = rand() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('PFC/Loss_Report/Documents & CNIC Pic'), $new_name);
    
}
// end multiple image upload

// single image upload
if($request->hasfile('applicant_pic')){
    $file = $request->file('applicant_pic');
    $extension= $file->getClientOriginalExtension();
    $filename= time() . '.' . $extension;
    $file->move('PFC/Loss_Report/Applicant_pic', $filename);
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
        
        $student = lossmodel::find($id);
        return view ('AdminSide.Loss Report.lossPDF', compact('student','id'));
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
        $student = lossmodel::find($id);
        $pdf = PDF::loadView('AdminSide.Loss Report.lossPDF', ['student'=>$student]);
        $fileName = $student->name;
        return $pdf->stream('Loss_Report.pdf' . '.pdf');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = lossmodel::find($id);
        $student->delete();
        return redirect()->back()->with('success','Data was Deleted Successfully!');
    }
}
