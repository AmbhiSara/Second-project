@extends('layouts.app')
@section('content')

    @if (session()->has('message'))
        
        <div class="alert alert-success">
            
        {{ session()->get('message')}}

        </div>
    @endif

<h2>Student Details List</h2>
<div class="table">
  <button type="button" class="btn btn-success"> 
     <a href="{{route('student.create')}}"  style="text-decoration: none; color:white;">Create Student </a> 
  </button>
</div>
<div class="table-responsive">
   <table class="table table-striped-columns">
    <thead class="table-dark"> 
       <tr>
              <th>ID</th>
              <th>First Name </th>
              <th>Last Name</th>
              <th>Gender</th>
              <th>DOB</th>
              <th>NIC</th> 
              <th>Address</th>
              <th>Subject</th>
              <th>Grade</th>
              <th>HColor</th>
              <th>Subject</th>
              <th colspan="3">Action</th>
                
        </tr>
    </thead>
     @foreach ($students as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->first_name}}</td>
            <td>{{$student->last_name}}</td>
            <td>{{$student->gender}}</td>
            <td>{{$student->dob}}</td>
            <td>{{$student->nic}}</td>
            <td>{{$student->address}}</td>
            <td>
                @php
                    $subjectNames = [];
                    foreach ($student->subjects as $subject) {
                        $subjectNames[] = $subject->subject_name;
                    }
                    echo implode(', ', $subjectNames);
                @endphp
            </td>
             <td> <button type="button" class="btn btn-outline-secondary"><a href="{{route('grade.show',$student->grade->id)}}"  style="text-decoration: none; color:darkslategray" >{{$student->grade->grade_name}}</a></button></td>
            {{-- <td><a href="{{route('grade.show',$student->user->id)}}" class="menuitem">{{$student->user->email}}</a></td> --}}
            <td> <button type="button" class="btn btn-outline-secondary"><a href="{{route('hcolor.show',$student->hcolor->id)}}" style="text-decoration: none; color:darkslategray">{{$student->hcolor->hcolor_name}}</a></button></td>
            <td> <button type="button" class="btn btn-outline-secondary"><a href="{{route('student.subject.show',[$student->id,0])}}" style="text-decoration: none; color:darkslategray">Subject</a></button></td>
            <td> <button type="button" class="btn btn-primary"><a href="{{route('student.show',$student->id)}}"  style="text-decoration: none; color:white" >Show</a></button></td>
            <td><button type="button" class="btn btn-warning"><a href="{{route('student.edit',$student->id)}}"  style="text-decoration: none; color:black">Edit</a></button></td> 
            <td><form action="{{ route('student.destroy', $student->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
                </form></td>
        </tr>  
    @endforeach 
    
  </table>
  {{$students->links()}} 
</div>
@endsection

