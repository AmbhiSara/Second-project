@extends('layouts.layout')
@section('contant')
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
  }
  th, td {
    padding: 5px;
    text-align: left;
  }
  </style>
<h2>Grade Show</h2>
<table  style="width:30%">
     <tr>
              <td>ID</td>
              <td>{{$grades->id}}</td>
        </tr>
        <tr>
            <td>Grade Group </td>
            <td>{{$grades->grade_group}}</td>
        </tr>
        <tr>
            <td>Grade Name</td>
            <td>{{$grades->grade_name}}</td>
        </tr>   
        <tr>   
              <td>Grade Order</td>
              <td>{{$grades->grade_order}}</td>
       </tr>    
 <tr>
              <td><a href="{{route('grade.index')}}" class="menuitem">Back</a></td>
        </tr>  
 
    
</table>

<h2>Student-Grade show</h2>
<table  style="width:30%;">
   
    <tr>
        <th>Student ID</th>
        <th>Grade ID</th>
        <th>Grade Name</th>
        <th>First Name </th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>DOB</th>
        <th>NIC</th> 
        <th>Address</th>
        
    </tr>
    @foreach ($students as $student)
    <tr>
        <td>{{$student->id}}</td>
        <td>{{$student->grade->id}}</td>
        <td>{{$student->grade->grade_name}}</td>
        <td>{{$student->first_name}}</td>
        <td>{{$student->last_name}}</td>
        <td> {{$student->gender}}</td>
        <td>{{$student->dob}}</td>
        <td>{{$student->nic}}</td>
        <td>{{$student->address}}</td>
         
    </tr>
    @endforeach 
</table>
    
    <a href="{{route('subject.index')}}" class="menuitem">Back</a>
      
 
@endsection


