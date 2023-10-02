@extends('layouts.layout')
@section('contant')

         @if ($errors->any())
           @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                    {{$error}}
                </div> 
            @endforeach
         @endif 

<form method="post" action="{{route('subject.store')}}">
    @csrf
    @method('POST')
    <div class="container">
        <form>
            <div class="row">
                <div class="col-25">
                   <label for="subject_name">Subject Name</label>
                </div>
                <div class="col-75">
                   <input type="text" id="subject_name" name="subject_name" placeholder="Enter  subject_name....">
                </div>
            </div>
              <div class="row">
                    <div class="col-25">
                       <label for="subject_index">Subject Index</label>
                    </div>
                    <div class="col-75">
                       <input type="text" id="subject_index" name="subject_index" placeholder="Enter subject index..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                       <label for="subject_order">Subject Order</label>
                    </div>
                    <div class="col-75">
                       <input type="text" id="subject_order" name="subject_order" placeholder="Enter grade order....">
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



