<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\Http\Request;
use App\vehiclemodel;
class vehiclecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = vehiclemodel::all()->toArray();
        return view('AdminSide.Vehicle_Verification.showvehicledata', compact ('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service.Vehicle_Verification.vehicle');
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
            'f_name' => 'required|string',
            'cnic' => 'required|digits:13',
            'address' => 'required|string',
            'email' => 'required|email|ends_with:.com|unique:App\vehiclemodel,email',
            'cell_no' => 'required|max:11|min:11',
            'dob' => 'required|date',
            'gender' => 'required',
            'district' => 'required|string',
            'vehicle_no' => 'required|string',
            'vehicle_detail' => 'required|string',
            'pic' => 'required',
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
            'district.required' => 'Please Enter Applicant Home District',
            'vehicle_no.required' => 'Please Enter Vehicle Number',
            'vehicle_detail.required' => 'Please Enter Applicant Vehicle Detail'
        ]);
        
        $student = new vehiclemodel([
            'name' => $request->get('name'),
            'f_name' => $request->get('f_name'),
            'cnic' => $request->get('cnic'),
            'address' => $request->get('address'),
            'email' => $request->get('email'),
            'cell_no' => $request->get('cell_no'),
            'dob' => $request->get('dob'),
            'gender' => $request->get('gender'),
            'district' => $request->get('district'),
            'vehicle_no' => $request->get('vehicle_no'),
            'vehicle_detail' => $request->get('vehicle_detail')
            ]);

// multiple image upload
$image_code='';
$images = $request->file('pic');
foreach($images as $image){
    $new_name = rand() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('PFC/Vehicle_Verification/CNIC & Vehicle Documents Pic'), $new_name);
    
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
        $student = vehiclemodel::find($id);
        return view ('AdminSide.Vehicle_Verification.vehiclePDF', compact('student','id'));
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
        $student = vehiclemodel::find($id);
        $pdf = PDF::loadView('AdminSide.Vehicle_Verification.vehiclePDF', ['student'=>$student]);
        $fileName = $student->name;
        return $pdf->stream('Vehicle_Verification.pdf' . '.pdf');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = vehiclemodel::find($id);
        $student->delete();
        return redirect()->back()->with('success','Data was Deleted Successfully!');
    }
}
