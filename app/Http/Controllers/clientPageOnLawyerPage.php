<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\client;
class clientPageOnLawyerPage extends Controller
{
     public function show()
      {               
               $client = DB::table('clients')->get();
      	  return view('lawyerpage/clientPageOn_lawyerPage')->withclient($client);
      }
}
