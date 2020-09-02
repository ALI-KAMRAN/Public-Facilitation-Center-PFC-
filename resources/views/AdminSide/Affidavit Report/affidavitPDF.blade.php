<!DOCTYPE html>
<html lang="en">
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: center;    
}
</style>

    <title>Affidavit Report</title>
</head>
<body>

<form action="{{action('affidavitController@update',$student->id)}}" method="POST">

@csrf
<input type="hidden" name="_method" value="PATCH">
        
<center><h3><u>Affidavit</u></h3></center><br>  
   
I ___________<u>{{$student->name}}</u>________________  S/O ________<u>{{$student->f_name}}</u>_____<br><br>
Residence Of__________<u>{{$student->address}}</u>___________<br><br>


<h4>Hereby declare that</h4>

1. I shall not indulge in politics and violation of any type <br>
2. I shall abide by all the rules and regulation <br>
3. I shall be responsible of any type of lose in property/ Breakages by me <br>
4. I shall be cooperative with the administration <br>
5. External pressure will be extorted on instructions, administration in any disciplinary matters. <br>
6. I do not have any accommodation in Lahore and surrounding areas. <br>
7. In case, a student is returning from home, she may be allowed to enter the hostel after 8:00 pm upon showing un-rejectable solid proof. <br>
8. Allotment in the hostel shall be made to the students having minimum GPA and CGPA equal to 2.00 on semester to semester basis. <br>
9. Any statement found to be false at any stage would entail forfeiture of my accommodation in the CIIT hostel forthwith without any hindrance or further correspondence. <br>
10. The contents 1 to 9 of this affidavit are true and correct to the best of my knowledge and nothing has been concealed there in. <br><br><br>

Witness No.1 Name & F/Name:  {{$student->whitness_1n}} S/O {{$student->whitness_1f}}  <br><br>
Witness No.2 Name & F/Name:  {{$student->whitness_2n}} S/O {{$student->whitness_2f}} <br><br>

<h3>Signature of Parent/ Guardian______________________________</h3> <br><br><br><br>
<h4>Note: Fifty rupees stamp paper with the stamp of oath commissioner is acceptable. </h4>







<button class="btn btn-success" style="margin-left:80%; ">PDF Generate</button>

</form>

</body>
</html>