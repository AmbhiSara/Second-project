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
<h2>HColor Show</h2>
<table  style="width:30%">
   
        <tr>
              <td>ID</td>
              <td>{{$hcolors->id}}</td>
        </tr>
        <tr>
            <th>HColor Name </th>
            <td>{{$hcolors->hcolor_name}}</td>
        </tr>
        <tr>
            <th>HColor Index</th>
            <td>{{$hcolors->hcolor}}</td>
        </tr>   
        <tr>   
              <th>HColor Order</th>
              <td>{{$hcolors->hcolor_order}}</td>
       </tr>    
     
        <tr>
              <td><a href="{{route('hcolor.index')}}" class="menuitem">Back</a></td>
        </tr>  
 
    
</table> 


<h2>Student-HColor Show</h2>
<table  style="width:30%;">
  
    <tr>
        <th>Student ID</th>
        <th>HColor ID</th>
        <th>HColor Name</th>
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
        <td>{{$student->hcolor->id}}</td>
        <td>{{$student->hcolor->hcolor_name}}</td>
        <td>{{$student->first_name}}</td>
        <td>{{$student->last_name}}</td>
        <td>{{$student->gender}}</td>
        <td>{{$student->dob}}</td>
        <td>{{$student->nic}}</td>
        <td>{{$student->address}}</td>
         
    </tr>
    @endforeach 
</table>
    
    <a href="{{route('subject.index')}}" class="menuitem">Back</a>
      
 
@endsection


