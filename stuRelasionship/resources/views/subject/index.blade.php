@extends('layouts.layout')
@section('contant')

    @if (session()->has('message'))
        
        <div class="alert alert-success">
            
        {{ session()->get('message')}}

        </div>
    @endif

<h2>Subject Details List</h2>
<a href="{{route('subject.create')}}" class="menuitem">Create subjects</a>
<table id="students">
   
        <tr>
              <th>ID</th>
              <th>Subject Name </th>
              <th>Subject Index</th>
              <th>Subject Order</th>
              <th colspan="3">Action</th>
       </tr>    
     @foreach ($subjects as $key=>$subject)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$subject->subject_name}}</td>
            <td>{{$subject->subject_index}}</td>
            <td>{{$subject->subject_order}}</td>
            <td><a href="{{route('subject.show',$subject->id)}}" class="menuitem">Show</a></td>
            <td><a href="{{route('subject.edit',$subject->id)}}" class="menuitem">Edit</a></td> 
            <td><form action="{{ route('subject.destroy', $subject->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="menuitem">Delete</button>
            </form></td>
        </tr>  
    @endforeach 
    
</table> 
@endsection

