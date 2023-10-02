@extends('layouts.layout')
@section('contant')

    @if (session()->has('message'))
        
        <div class="alert alert-success">
            
        {{ session()->get('message')}}

        </div>
    @endif

<h2>Student Details List</h2>
<a href="{{route('student.create')}}" class="menuitem">Create Student</a>
<table id="students">
   
        <tr>
              <th>ID</th>
              <th>First Name </th>
              <th>Last Name</th>
              <th>Gender</th>
               <th>DOB</th>
              <th>NIC</th>
              <th>Grade ID</th>
              <th>HColor ID</th>
              <th>Subject ID</th>
              <th>Address</th>   
        </tr>
     @foreach ($students as $key=>$student)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$student->first_name}}</td>
            <td>{{$student->last_name}}</td>
            <td>{{$student->gender}}</td>
            <td>{{$student->dob}}</td>
            <td>{{$student->nic}}</td>
            <td>{{$student->grade->grade_name}}</td>
            <td>{{$student->hcolor->hcolor_name}}</td>
            <td>{{$student->subjects->subject_name}}</td>
            <td>{{$student->address}}</td>
            <td><a href="{{route('student.show',$student->id)}}" class="menuitem">Show</a></td>
            <td><a href="{{route('student.edit',$student->id)}}" class="menuitem">Edit</a></td> 
            <td><form action="{{ route('student.destroy', $student->id) }}" method="POST">
                @csrf
                @method('DELETE')
                  <button type="submit" class="menuitem">Delete</button>
                </form></td>
        </tr>  
    @endforeach 
    
</table> 
@endsection

