<?php

namespace App\Http\Controllers;
use App\stampmodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\addstampmodel;
use App\orders;
class addstampcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // stamp data show to homepage and user purchase the stamp paper using this method
        $students = addstampmodel::all()->toArray();
        return view('stamp.stamp', compact ('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stamp.stampPaper');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // user enter the information due to purchase the stamp paper
        $this->validate($request, [

            'name' => 'required|alpha',
            'f_name' => 'required|string',
            'cnic' => 'required|digits:13',
            'address' => 'required|string',
            'email' => 'required|email|ends_with:.com|unique:App\stampmodel,email',
            'cell_no' => 'required|max:11|min:11',
            'purpose' => 'required',
            'payment_method' => 'required',
            'purchase' => 'required',
            'price' => 'required',
            'comments' => 'required',
            'pic' => 'required'
          
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
            'purpose.required' => 'Please Select Stamp Purpose',
            'payment_method.required' => 'Please Select Payment Method',
            'purchase.required' => 'Please Enter Stamp Purchase',
            'price.required' => 'Please Select Stamp Price',
            'comments.required' => 'Please Enter User Comments',
            'pic.required' => 'Please Enter User signaature'
            
    ]);
        
        $student = new stampmodel([
            'name' => $request->get('name'),
            'f_name' => $request->get('f_name'),
            'cnic' => $request->get('cnic'),
            'address' => $request->get('address'),
            'email' => $request->get('email'),
            'cell_no' => $request->get('cell_no'),
            'purpose' => $request->get('purpose'),
            'payment_method' => $request->get('payment_method'),
            'purchase' => $request->get('purchase'),
            'price' => $request->get('price'),
            'comments' => $request->get('comments')
             ]);
// multiple image upload
$image_code='';
$images = $request->file('pic');
foreach($images as $image){
    $new_name = rand() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('PFC/Stamp_data'), $new_name);
    
}

$data=DB::select('select * from orders');
if($data)
{
    $student->save();
    return redirect()->back()->with('success','Data was Successfully Added!');
        }


        else{

             return redirect()->back()->withErrors(['Please First add product to cart']);

        }

}
// end multiple image upload


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
        // this code delete the stamp paper data who user enter to purchase stamp paper
        $student = stampmodel::find($id);
        $student->delete();
        return redirect()->back()->with('success','Data was Deleted Successfully!');
    }
}
