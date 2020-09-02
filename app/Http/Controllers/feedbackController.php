<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\feedbackModel;
class feedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = feedbackModel::all()->toArray();
        return view('AdminSide.User Feedback.showUserFeedbackdata', compact ('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'email' => 'required|email|ends_with:.com|unique:App\feedbackModel,email',
            'cell_no' => 'required|max:11|min:11',
            'message' => 'required|string',
        ],[

            'name.required' => 'Please Enter Applicant Name',
            'email.required' => 'Please Enter Applicant Email Address',
            'email.unique' => 'This Email Address is Already Taken',
            'cell_no.required' => 'Please Enter Applicant Cell Number',
            'cell_no.max' => 'Please Enter Applicant 11 Digits Cell Number',
            'message.required' => 'Please Enter Applicant Feedback Message'
           

        ]);
        
        $student = new feedbackModel([
            'name' => $request->get('name'),
            'cell_no' => $request->get('cell_no'),
            'message' => $request->get('message'),
            'email' => $request->get('email'),
            ]);
$student->save();
return redirect()->back()->withErrors('success','Data was Successfully Added!');
    
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
        $student = feedbackModel::find($id);
        $student->delete();
        return redirect()->back()->with('success','Data was Deleted Successfully!');
    }
}
