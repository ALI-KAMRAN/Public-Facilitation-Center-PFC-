<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\documentsmodel;
class documentscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = documentsmodel::all()->toArray();
        return view('AdminSide.DocumentsVerification.showdocumentsdata', compact ('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('documents.documents');
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
            'cnic' => 'required|digits:13',
            'address' => 'required|string',
            'email' => 'required|email|ends_with:.com|unique:App\documentsmodel,email',
            'cell_number' => 'required|max:11|min:11',
            'birthday' => 'required|date',
            'gender' => 'required',

            'purpose' => 'required',
            'documents_detail' => 'required',
            'quantity' => 'required|digits:1',
            'receipt' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'district' => 'required',
            'pic' => 'required'
            
            
        ],[
            'applicant_name.alpha' => 'Applicant Name Must be Alphabetic Character Only',
            'applicant_name.required' => 'Please Enter Applicant Name',
           
            'cnic.required' => 'Please Enter Applicant CNIC Number',
            'cnic.digits' => 'Please Enter 13 Digits Applicant CNIC Number',
            'father_name.required' => 'Please Enter Applicant Father Name',
            'email.required' => 'Please Enter Applicant Email Address',
            'email.unique' => 'This Email Address is Already Taken',
            'cell_number.required' => 'Please Enter Applicant Cell Number',
            'cell_number.max' => 'Please Enter Applicant 11 Digits Cell Number',
            'address.required' => 'Please Enter Applicant Home Address',
            'birthday.required' => 'Please Enter Applicant Date Of Birth',
            'birthday.date' => 'Please Select Accurate Date Formate',
            'gender.required' => 'Please Select Applicant Gender',
            'purpose.required' => 'Please Enter Documents Purpose',
            'documents_detail.required' => 'Please Enter Documents Detail',
            'pic.required' => 'Please upload Documents ',
            'quantity.required' => 'Please Enter Documents Quantity',
            'receipt.required' => 'Please Upload Courier Receipt',
            'district.required' => 'Please Enter Applicant Home District'

        ]);
        
        $student = new documentsmodel([
            'applicant_name' => $request->get('applicant_name'),
            'father_name' => $request->get('father_name'),
            'cnic' => $request->get('cnic'),
            'address' => $request->get('address'),
            'email' => $request->get('email'),
            'cell_number' => $request->get('cell_number'),
            'birthday' => $request->get('birthday'),
            'gender' => $request->get('gender'),
            'purpose' => $request->get('purpose'),
            'documents_detail' => $request->get('documents_detail'),
            'pic' => $request->get('pic'),
            'quantity' => $request->get('quantity'),
            'district' => $request->get('district')
            
            
            
           
         ]);






// multiple image upload
         $image_code='';
         $images = $request->file('pic');
         foreach($images as $image){
             $new_name = rand() . '.' . $image->getClientOriginalExtension();
             $image->move(public_path('PFC/Documents_Verification/Documents'), $new_name);
             
         }
         // end multiple image upload

// single image upload
if($request->hasfile('receipt')){
    $file = $request->file('receipt');
    $extension= $file->getClientOriginalExtension();
    $filename= time() . '.' . $extension;
    $file->move('PFC/Documents_Verification/Compulsory_Items', $filename);
    $student->receipt= $filename;
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = documentsmodel::find($id);
        $student->delete();
        return redirect()->back()->with('success','Data was Deleted Successfully!');
    }




    }

