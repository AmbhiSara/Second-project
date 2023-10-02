@extends('layouts.layout')
@section('contant')

    @if (session()->has('message'))
        
        <div class="alert alert-success">
            
        {{ session()->get('message')}}

        </div>
    @endif

<h2>grades Details List</h2>
<a href="{{route('grade.create')}}" class="menuitem">Create grades</a>
<table id="students">
   
        <tr>
              <th>ID</th>
              <th>Grade Group </th>
              <th>Grade Name</th>
              <th>Grade Order</th>
              <th colspan="3">Action</th>
       </tr>    
     @foreach ($grades as $key=>$grade)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$grade->grade_group}}</td>
            <td>{{$grade->grade_name}}</td>
            <td>{{$grade->grade_order}}</td>
            <td><a href="{{route('grade.show',$grade->id)}}" class="menuitem">Show</a></td>
            <td><a href="{{route('grade.edit',$grade->id)}}" class="menuitem">Edit</a></td> 
            <td><form action="{{ route('grade.destroy', $grade->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="menuitem">Delete</button>
            </form></td>
        </tr>  
    @endforeach 
    
</table> 
@endsection

