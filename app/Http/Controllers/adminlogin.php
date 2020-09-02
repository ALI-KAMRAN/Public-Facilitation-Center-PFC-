<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\affidavitModel;
class adminlogin extends Controller
{
     public function show()
    {
    return view('lawyerpage.adminlogin');
    
}




   public function exportData(){
return Excel::download(new DataExport,'affidavit_report.xlsx');
}    
      
}


class DataExport implements FromCollection{

	function collection(){
		return affidavitModel::all();
	}
}
