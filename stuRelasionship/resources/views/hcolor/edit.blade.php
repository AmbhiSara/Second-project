@extends('layouts.layout')
@section('contant')

         @if ($errors->any())
           @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                    {{$error}}
                </div> 
            @endforeach
         @endif 

<form method="post" action="{{route('hcolor.update',$hcolors->id)}}">
    @csrf
    @method('PUT')
    <div class="container">
        <form>
            <div class="row">
                <div class="col-25">
                   <label for="hcolor_name">HColor Name</label>
                </div>
                <div class="col-75">
                   <input type="text" id="hcolor_name" name="hcolor_name" value="{{$hcolors->hcolor_name}}">
                </div>
            </div>
              <div class="row">
                    <div class="col-25">
                       <label for="hcolor_">HColor </label>
                    </div>
                    <div class="col-75">
                       <input type="color" id="hcolor" name="hcolor" value="{{$hcolors->hcolor}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                       <label for="hcolor_order">hcolor Order</label>
                    </div>
                    <div class="col-75">
                       <input type="text" id="hcolor_order" name="hcolor_order" value="{{$hcolors->hcolor_order}}">
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



