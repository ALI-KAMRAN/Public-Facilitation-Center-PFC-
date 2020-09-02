<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\Http\Request;
use App\affidavitModel;
class affidavitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = affidavitModel::all()->toArray();
        return view('AdminSide.Affidavit Report.showAffidavitdata', compact ('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service.violence_report.violence');
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
            'email' => 'required|email|ends_with:.com|unique:App\affidavitModel,email',
            'cell_no' => 'required|max:11|min:11',
            'address' => 'required|string',
            'dob' => 'required|date',
             'gender' => 'required',
             'whitness_1n' => 'required|string',
             'whitness_1f' => 'required|string',
            'whitness_2n' => 'required|string',
            'whitness_2f' => 'required|string',
             'affidavit_purpose' => 'required',
             'receipt' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            
        ],[
            'name.alpha' => 'Applicant Name Must be Alphabetic Character Only',
            'name.required' => 'Please Enter Applicant Name',
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
            'whitness_1n.required' => 'Please Enter First Whitness Name',
            'whitness_1f.required' => 'Please Enter First Whitness Father Name',
            'whitness_2n.required' => 'Please Enter Second Whitness Name',
            'whitness_2f.required' => 'Please Enter Second Whitness Father Name',
            'receipt.required' => 'Please Upload CNIC Pic'

        ]);
        
        $student = new affidavitModel([
            'name' => $request->get('name'),
            'cnic' => $request->get('cnic'),
            'f_name' => $request->get('f_name'),
            'email' => $request->get('email'),
            'cell_no' => $request->get('cell_no'),
            'address' => $request->get('address'),
            'dob' => $request->get('dob'),
             'whitness_1n' => $request->get('whitness_1n'),
             'whitness_1f' => $request->get('whitness_1f'),
             'gender' => $request->get('gender'),
            'whitness_2n' => $request->get('whitness_2n'),
            'whitness_2f' => $request->get('whitness_2f'),
             'affidavit_purpose' => $request->get('affidavit_purpose')
              
]);



// single image upload
if($request->hasfile('receipt')){
    $file = $request->file('receipt');
    $extension= $file->getClientOriginalExtension();
    $filename= time() . '.' . $extension;
    $file->move('PFC/Affidavit_Report/Courier_pic', $filename);
    
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
        $student = affidavitModel::find($id);
        return view ('AdminSide.Affidavit Report.affidavitPDF', compact('student','id'));
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
        $student = affidavitModel::find($id);
        $pdf = PDF::loadView('AdminSide.Affidavit Report.affidavitPDF', ['student'=>$student]);
        $fileName = $student->name;
        return $pdf->stream('Affidavit_Report.pdf' . '.pdf');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = affidavitModel::find($id);
        $student->delete();
        return redirect()->back()->with('success','Data was Deleted Successfully!');
    }
}
