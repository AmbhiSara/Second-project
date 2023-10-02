@extends('layouts.layout')
@section('contant')

         @if ($errors->any())
           @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                    {{$error}}
                </div> 
            @endforeach
         @endif 

<form method="post" action="{{route('grade.update',$grades->id)}}">
    @csrf
    @method('PUT')
    <div class="container">
        <form style="input[]">
            <div class="row">
                <div class="col-25">
                   <label for="grade_group">Grade Group</label>
                </div>
                <div class="col-75">
                   <input type="text" id="grade_group" name="grade_group" value="{{$grades->grade_group}}">
                </div>
            </div>
              <div class="row">
                    <div class="col-25">
                       <label for="grade_name">Grade Name</label>
                    </div>
                    <div class="col-75">
                       <input type="text" id="grade_name" name="grade_name" value="{{$grades->grade_name}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                       <label for="grade_order">Grade Order</label>
                    </div>
                    <div class="col-75">
                       <input type="text" id="grade_order" name="grade_order" value="{{$grades->grade_order}}">
                    </div>
                </div>
                
                <br>
                <div class="row">
                       <input type="submit" value="Submit">
                </div>
        </form>
   </div>
</form>
@endsection



