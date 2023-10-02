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
  }</style>
<h2>Subject Show</h2>
<table  style="width:30%">
   
        <tr>
              <td>ID</td>
              <td>{{$subjects->id}}</td>
        </tr>
        <tr>
            <td>subject Name </td>
            <td>{{$subjects->subject_name}}</td>
        </tr>
        <tr>
            <td>Subject Index</td>
            <td>{{$subjects->subject_index}}</td>
        </tr>   
        <tr>   
              <td>Subject Order</td>
              <td>{{$subjects->subject_order}}</td>
       </tr>    
     
        <tr>
              <td><a href="{{route('subject.index')}}" class="menuitem">Back</a></td>
        </tr>  
 
    
</table> 
@endsection

