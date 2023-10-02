@extends('layouts.app')
@section('content')

         @if ($errors->any())
           @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                    {{$error}}
                </div> 
            @endforeach
         @endif 

<form method="post" action="{{route('student.store')}}" >
    @csrf
    @method('POST') 
    <div class="container">
       <div class="row justify-content-center">
           <div class="col-sm-10">
              <div class="card">
                <div class="card-header fw-bold fs-3">{{ ('Student Register')}}</div>
                <div class="row mp-3">
                    <div class="col-md-6">
                        <img src="../images/image1.jpg" width="100%" height="1000px">
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
                      <label for="admission_no" class="form-label fw-bold">Admission No</label>
                      <input type="text" id="admission_no" name="admission_no" placeholder="Enter  admission_no...."  class="form-control">
                </div>
            </div>
            <h1></h1>
            <div class="row mp-3">
                <div class="col-md-6">
                    <label for="fname" class="form-label fw-bold">First Name</label>
                    <input type="text" id="first_name" name="first_name" placeholder="Enter first name.."  class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="lname" class="form-label fw-bold">Last Name</label>
                    <input type="text" id="lname" name="last_name" placeholder="Enter last name.."  class="form-control">
                 </div>
             </div>
             <h1></h1>
             <div class="row mp-3">
                  <legend class="col-form-label fw-bold">Gender</legend>
                     <div class="col-sm-10">
                        <div class="form-check form-check-inline">
                           <input type="radio" id="female" name="gender" value="Female" class="form-check-input" >
                           <label for="gender" class="form-check-label">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                           <input type="radio" id="male" name="gender" value="Male" class="form-check-input">
                           <label for="gender" class="form-check-label">Male</label>
                        </div>
                    </div>
                </div>
                {{-- <div class="row g-3">
                    <div class="col-md-6">
                       <label for="subject_id">Subject ID</label>
                    </div>
                    <div class="col-75">
                        <select name="subject_id[]" id="subject_id" class="form-select" multiple>
                               <option value="  "> Select your Subjects.. </option>
                            @foreach ($subjects as $subject )      
                               <option value="{{$subject->id}}"> {{$subject->subject_name}} </option> 
                            @endforeach
                        </select>
                     </div>
                </div> --}}
                <h1></h1>
                <div class="row g-3">
                    <div class="col-md-6">
                      <label for="subject_id" class="form-check-label fw-bold">Subjects</label>
                    </div>
                    <div class="col-75">
                      @foreach ($subjects as $subject ) 
                        <div class="form-check form-check-inline">
                          <input type="checkbox" id="subject{{$subject->id}}" name="subject_id[]" value={{$subject->id}} class="form-check-input">
                          <label class="form-check-label" for="subject{{$subject->id}}"> {{$subject->subject_name}} </label>
                        </div>
                      @endforeach
                    </div>
                  </div>
                  <h1></h1>
                  <div class="row g-3">
                        <div class="col-md-6">
                           <label for="grade_id" class="form-label fw-bold">Grade ID</label>
                             <select name="grade_id" id="grade_id" class="form-select">
                                   <option value="  "> Select your grade... </option>
                                @foreach ($grades as $grade )      
                                   <option value="{{$grade->id}}"> {{$grade->grade_name}} </option> 
                                @endforeach
                            </select>
                            <h1></h1>
                           <a href="{{ route('grade.create') }}" class="btn btn-success"> Add </a>
                         </div>
                         <div class="col-md-6">
                               <label for="hcolor_id" class="form-label fw-bold">HColor ID</label>
                               <select name="hcolor_id" id="hcolor_id" class="form-select">
                                   <option value=""> Select your hcolor... </option>
                                @foreach ($hcolors as $hcolor )      
                                   <option value={{$hcolor->id}}> {{$hcolor->hcolor_name}} </option> 
                                @endforeach
                               </select>
                               <h1></h1>
                              <a href="{{ route('hcolor.create') }}"  class="btn btn-success"> Add   </a>
                            </div>
                        </div>
                        <h1></h1>
                <div class="row g-3">
                    <div class="col-md-6">
                      <label for="dob" class="form-label fw-bold">DOB</label>
                       <input type="date" id="dob" name="dob" class="form-control">
                    </div>
                    <div class="col-md-6">
                       <label for="nic" class="form-label fw-bold">NIC</label>
                        <input type="text" id="nic" name="nic" placeholder="Enter NIC No..."  class="form-control">
                    </div>
                </div>
                <h1></h1>
                <div class="row g-3">
                    <div class="col-md-6">
                       <label for="address" class="form-label fw-bold">Address</label>
                    </div>
                    <div class="col-75">
                        <textarea id="address" name="address" placeholder="Write something.." style="height:100px"  class="form-control"></textarea>
                    </div>
                </div>
                <h1></h1>
                <br>
                <div class="row g-3">
                    <div class="col-md-6">
                        <input type="submit" value="Submit"  class="form-control" style="background-color: #0275d8">
                    </div>
                <div class="col-md-6">
                    <input type="reset" value="Reset"  class="form-control" style="background-color: #f0ad4e">
                </div>
             </div>
            </div>
            </form>
           </div>
        </div>
     </div>
    </div>     
   </div>
</form>
@endsection



