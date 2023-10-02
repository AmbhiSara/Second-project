


@extends('layouts.app')
@section('content')
@if (session()->has('message'))
        
<div class="alert alert-success">
    
  {{ session()->get('message')}}

</div>
@endif

<a  href="{{route('student.index')}}">Back to List</a>

<form action="{{route('student.update',$students->id)}}"  method="POST">
    @csrf
    @method('PUT')
    <div class="container">
        <div class="row mp-3 justify-content-center">
            <div class="col-sm-10">
               <div class="card">
                 <div class="card-header fw-bold fs-3">{{ ('Student Details Edit')}}</div>
                 <div class="row mp-3">
                     <div class="col-md-6">
                         <img src="../images/image.jpg" width="100%">
                     </div>
                     <div class="col-md-6 d-flex flex-column justify-content-center">
                         <div>
                             {{-- <h1 class="text-center">Enter Your Preferred Company Name Here</h1> --}}
                             <h3></h3>
                             <h3></h3>
                         </div>
                  <div class="card-body">
           <form>
            <div class="row mp-3">
                <div class="col-md-6">
                   <label for="admission_no">Admission No</label>
                  <input type="text" id="admission_no" name="admission_no" value="{{$students->admission_no}}">
                </div>
            </div>
            <div class="row mp-3">
                <div class="col-md-6">
                   <label for="fname">First Name</label>
                   <input type="text" id="fname" name="first_name" placeholder="Your First name.." value="{{$students->first_name}}"> 
                </div>
                <div class="col-md-6">
                   <label for="lname">Last Name</label>
                   <input type="text" id="lname" name="last_name" placeholder="Your last name.." value="{{$students->last_name}}">
                </div>
            </div>
            <h1></h1>
            <div class="row mp-3">
                 <legend class="col-form-label fw-bold">Gender</legend>
                    <div class="col-sm-10">
                            <input type="radio" id="female" name="gender" value="Female" {{$students->gender=='Female'?'checked':'';}} class="form-check-input">
                            <label for="gender" class="form-check-label">Female</label>
                        </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" id="male" name="gender" value="Male" {{$students->gender=='Male'?'checked':'';}} class="form-check-input">
                        <label for="gender" class="form-check-label">Male</label>
                    </div>
            </div>
            <div class="row mp-3">
                <div class="col-md-6">
                    <label for="dob">DOB</label>
                </div>
                <div class="col-md-6">
                </div>
            </div>
            <div class="row mp-3">
                <div class="col-md-6">
                    <label for="nic">NIC</label>
                </div>
                <div class="col-md-6">
                    <input type="text" id="nic" name="nic" value="{{$students->nic}}">
                </div>
            </div>
            <div class="row mp-3">
                <div class="col-md-6">
                  <label for="grade_id">Grade ID</label>
                </div>
                <div class="col-md-6">
                    <select name="grade_id" id="grade_id">
                        @foreach ($grades as $key=>$grade )
                            <option value={{$key}} {{$students->grade_id==$key ?'selected':'';}}> {{$grade}} </option>
                        @endforeach
                    </select>
                     {{-- <input type="text" id="grade_id" name="grade_id" value="{{$students->grade->grade_name}}"> --}}
                </div>
            </div>
            <div class="row mp-3">
                <div class="col-md-6">
                  <label for="hcolor_id">HColor ID</label>
                </div>
                <div class="col-md-6">
                    <select name="hcolor_id"  id="hcolor_id">
                         @foreach ($hcolors as $key=>$hcolor )
                             <option value={{$key}} {{$students->hcolor_id==$key ? 'selected':'';}}> {{$hcolor}}</option>
                         @endforeach
                    </select>
                     {{-- <input type="text" id="hcolor_id" name="hcolor_id" value="{{$students->hcolor->hcolor_name}}"> --}}
                </div>
            </div>
            <div class="row mp-3 g-3">
                <div class="col-md-6">
                  <label for="subject_id" class="form-check-label">Subjects</label>
                </div>
                <div class="col-md-6">
                    @foreach ($subjects as $subject)
                    <div class="form-check form-check-inline">
                        <input type="checkbox" id="subject{{$subject->id}}" name="subject_id[]" value="{{$subject->id}}"
                            {{ in_array($subject->id, $selectedSubjectIds) ? 'checked' : '' }}>
                        <label class="form-check-label" for="subject{{$subject->id}}">{{$subject->subject_name}}</label>
                    </div>
                @endforeach
                </div>
              </div>
            <div class="row mp-3">
                <div class="col-md-6">
                  <label for="address">Address</label>
                </div>
                <div class="col-md-6">
                   <textarea id="address" name="address" placeholder="Write something.." style="height:100px">{{$students->address}}</textarea>
                </div>
            </div>
            <br>
            <div class="row mp-3">
                <input type="submit" value="Update" class="btn btn-secondary">
            </div>
        </form>
    </div>
</form>
@endsection

