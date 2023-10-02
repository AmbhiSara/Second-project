@extends('layouts.layout')
@section('contant')

    @if (session()->has('message'))
        
        <div class="alert alert-success">
            
        {{ session()->get('message')}}

        </div>
    @endif

<h2>hcolor Details List</h2>
<a href="{{route('hcolor.create')}}" class="menuitem">Create HColors</a>
<table id="students">
   
        <tr>
              <th>ID</th>
              <th>HColor Name </th>
              <th>HColor</th>
              <th>HColor Order</th>
              <th colspan="3">Action</th>
       </tr>    
     @foreach ($hcolors as $key=>$hcolor)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$hcolor->hcolor_name}}</td>
            <td>{{$hcolor->hcolor}}</td>
            <td>{{$hcolor->hcolor_order}}</td>
            <td><a href="{{route('hcolor.show',$hcolor->id)}}" class="menuitem">Show</a></td>
            <td><a href="{{route('hcolor.edit',$hcolor->id)}}" class="menuitem">Edit</a></td> 
            <td><form action="{{ route('hcolor.destroy', $hcolor->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="menuitem">Delete</button>
            </form></td>
        </tr>  
    @endforeach 
    
</table> 
@endsection

