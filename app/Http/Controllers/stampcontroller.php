<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\addstampmodel;
use App\stampmodel;
class stampcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // stamp price data show in select box 
        $students = addstampmodel::all()->toArray();
        
        return view('checkout', compact ('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // this function show the data in admin side and admin view the whole user data and add stamp paper
        $students = stampmodel::all()->toArray();
        
        return view('AdminSide.stamp paper.stamp', compact ('students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // admin add the stamp paper in this code
        $this->validate($request, [

            'stamp_title' => 'required',
            'description' => 'required|string',
            'stamp_image' => 'required',
            'price' => 'required'
        ],[

            'stamp_title.required' => 'Please Enter Stamp Title',
            'description.date' => 'Please Enter Stamp Detail',
            'stamp_image.required' => 'Please Select Stamp Picture',
            'price.required' => 'Please Select Stamp Price'
            

        ]);
        
        $student = new addstampmodel([
            'stamp_title' => $request->get('stamp_title'),
            'description' => $request->get('description'),
            'price' => $request->get('price')
            
            ]);


// single image upload
if($request->hasfile('stamp_image')){
    $file = $request->file('stamp_image');
    $extension= $file->getClientOriginalExtension();
    $filename= time() . '.' . $extension;
    $file->move('PFC/StampPaper/Stamp_image', $filename);
    $student->stamp_image= $filename;
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
    public function show(Request $request)
    {
        
echo "kami";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
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
    public function update(Request $request)
    {
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
