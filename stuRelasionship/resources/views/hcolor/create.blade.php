@extends('layouts.layout')
@section('contant')

         @if ($errors->any())
           @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                    {{$error}}
                </div> 
            @endforeach
         @endif 

<form method="post" action="{{route('hcolor.store')}}">
    @csrf
    @method('POST')
    <div class="container">
        <form>
            <div class="row">
                <div class="col-25">
                   <label for="hcolor_name">HColor Name</label>
                </div>
                <div class="col-75">
                   <input type="text" id="hcolor_name" name="hcolor_name" placeholder="Enter  hcolor name....">
                </div>
            </div>
              <div class="row">
                    <div class="col-25">
                       <label for="hcolor">HColor </label>
                    </div>
                    <div class="col-75">
                       <input type="color" id="hcolor" name="hcolor" placeholder="Enter hcolor....">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                       <label for="hcolor_order">hcolor Order</label>
                    </div>
                    <div class="col-75">
                       <input type="text" id="hcolor_order" name="hcolor_order" placeholder="Enter hcolor order....">
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



