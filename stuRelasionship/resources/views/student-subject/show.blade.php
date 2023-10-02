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
  
<h2>Subject Show</h2>
<table  style="width:30%">
   
    <tr>
        <th>Full Name</th>
        <th colspan="3" style="color: green">{{$students->first_name . ' ' . $students->last_name}}</th>
   </tr>
    <tr>
        <th>ID</th>
        <th>subject Name </th>
        <th>Subject Index</th>
        <th>Subject Order</th>
    </tr>
    @foreach ($subjects as $subject)
    <tr>
        <td>{{$subject->id}}</td>
        <td>{{$subject->subject_name}}</td>
        <td>{{$subject->subject_index}}</td>
        <td>{{$subject->subject_order}}</td>
    </tr>
    @endforeach 
</table>
    
    <a href="{{route('subject.index')}}" class="menuitem">Back</a>
      
 
@endsection

