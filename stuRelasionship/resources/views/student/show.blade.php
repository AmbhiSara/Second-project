@extends('layouts.app')
@section('content')

         @if ($errors->any())
           @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                    {{$error}}
                </div> 
            @endforeach
         @endif 

<form method="POST">
        @csrf
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10">
                    <div class="card">
                           <div class="card-header fw-bold fs-3">{{ ('Student Details Show')}}</div>
                        <div class="row mp-3">
                                <div class="col-md-6">
                                    <img src="../../images/image5.jpg" width="100%" height="1000px">
                                </div>
                            <div class="col-md-6 d-flex flex-column justify-content-center">
                                <div>
                                    <h3></h3>
                                    <h3></h3>
                                 </div>
                            <div class="card-body">
    <form>
                                <div class="row mp-3">
                                    <div class="col-md-6">
                                       <label for="admission_no" class="form-label fw-bold">Admission No</label>
                                       <input type="text" id="admission_no" name="admission_no" placeholder="Enter  admission_no...."  class="form-control" value="{{$students->admission_no}}" readonly>
                                     </div>
                                </div>
                        <h1></h1>
                                <div class="row mp-3">
                                     <div class="col-md-6">
                                        <label for="fname" class="form-label fw-bold">First Name</label>
                                        <input type="text" id="first_name" name="first_name" placeholder="Enter first name.."  class="form-control" value="{{$students->first_name}}" readonly>
                                     </div>
                                     <div class="col-md-6">
                                        <label for="lname" class="form-label fw-bold">Last Name</label>
                                        <input type="text" id="lname" name="last_name" placeholder="Enter last name.."  class="form-control" value="{{$students->last_name}}" readonly>
                                     </div>
                                </div>
                        <h1></h1>
                                <div class="row mp-3">
                                            <legend class="col-form-label fw-bold">Gender</legend>
                                    <div class="col-sm-10">
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="female" name="gender" value="Female" {{$students->gender=='Female'?'checked':'';}} class="form-check-input" @disabled(true)>
                                                <label for="gender" class="form-check-label">Female</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="male" name="gender" value="Male" {{$students->gender=='Male'?'checked':'';}} class="form-check-input" @disabled(true)>
                                                <label for="gender" class="form-check-label">Male</label>
                                            </div>
                                    </div>
                                 </div>
                            <h1></h1>
                                <div class="row mp-3">
                                    <div class="col-md-6">
                                            <label for="grade_id" class="form-label fw-bold">Grade ID</label>
                                            <select name="grade_id" id="grade_id" class="form-select" >
                                                @foreach ($grades as $key=>$grade )
                                                    <option value={{$key}} {{$students->grade_id==$key ?'selected':'';}} @disabled(true)> {{$grade}} </option>
                                                @endforeach
                                            </select>
                                            {{-- <input type="text" id="grade_id" name="grade_id" value="{{$students->grade->grade_name}}"> --}}
                                    </div>
                                    <div class="col-md-6">
                                            <label for="hcolor_id" class="form-label fw-bold">HColor ID</label>
                                            <select name="hcolor_id"  id="hcolor_id" class="form-select">
                                                @foreach ($hcolors as $key=>$hcolor )
                                                    <option value={{$key}} {{$students->hcolor_id==$key ? 'selected':'';}} @disabled(true)> {{$hcolor}}</option>
                                                @endforeach
                                            </select>
                                        {{-- <input type="text" id="hcolor_id" name="hcolor_id" value="{{$students->hcolor->hcolor_name}}"> --}}
                                    </div>
                                </div>
                            <h1></h1>
                                <div class="row mp-3 g-3">
                                     <div class="col-md-6">
                                         <label for="subject_id" class="form-check-label fw-bold">Subjects</label>
                                     </div>
                                    <div class="col-75">
                                        @foreach ($subjects as $subject)
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" id="subject{{$subject->id}}" name="subject_id[]" value={{$subject->id}} class="form-check-input"
                                                    {{ in_array($subject->id, $selectedSubjectIds) ? 'checked' : '' }} @disabled(true)>
                                                <label class="form-check-label" for="subject{{$subject->id}}"> {{$subject->subject_name}} </label>
                                            </div>
                                         @endforeach
                                    </div>
                                </div>
                            <h1></h1>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="dob" class="form-label fw-bold">DOB</label>
                                        <input type="date" id="dob" name="dob" value={{$students->dob}} class="form-control" @readonly(true)>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nic" class="form-label fw-bold">NIC</label>
                                        <input type="text" id="nic" name="nic" value={{$students->nic}}  placeholder="Enter NIC No..."  class="form-control" @readonly(true)>
                                    </div>
                                </div>
                            <h1></h1>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="address" class="form-label fw-bold">Address</label>
                                    </div>
                                    <div class="col-75">
                                        <textarea id="address" name="address" placeholder="Write something.." style="height:100px"  class="form-control" readonly>{{$students->address}} </textarea>
                                    </div>
                                </div>
                            <h1></h1>
                            <br>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <a  href="{{route('student.index')}}" class="btn btn-secondary">Back to List</a>
                                    </div>
                                </div>
    </form>
                   </div>
                </div>
              </div>
          </div>
      </div>
  </div>
</form>
@endsection