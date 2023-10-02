<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\HColor;
use App\Models\Student;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $students=Student::paginate(4);
       $grades=Grade::all();
       $hcolors=HColor::all();
       $studentsSubject = Student::with('subjects')->get();
      return view('student.index',compact('students','grades','hcolors','studentsSubject'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $grades=Grade::all();
       //$grades=Grade::Pluck('grade_name','id');
       //dd($grades);
       $hcolors=HColor::all();
       //dd($hcolors);
       //$hcolors=HColor::Pluck('hcolor_name','id');
       $subjects=Subject::all();
        return view('student.create',compact('grades','hcolors','subjects'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $students=$request->except('subject_id');
        $student=Student::create($students);
        $studentId=$student->id;
        $subjects=$request->input('subject_id');

        $student=Student::find($studentId);
        $student->subjects()->attach($subjects);
    
        return redirect()
        ->route('student.index')
        ->withMessage('Student has been created successfully!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $students=Student::find($id);
       $grades=Grade::Pluck('grade_name','id');
       $hcolors=HColor::Pluck('hcolor_name','id');
          $subjects=Subject::all();
       $selectedSubjectIds = $students->subjects->Pluck('id')->toArray();
       //$user=User::find($id)->user;

       return view('student.show',compact('students','grades','hcolors','selectedSubjectIds','subjects'));  
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $students=Student::find($id);
        //$grades=Grade::all();
         $grades=Grade::Pluck('grade_name','id');
        //dd($grades);
         $hcolors=HColor::Pluck('hcolor_name','id');
         $subjects = Subject::all();
        // $subjects=Student::find($id)->subjects->toArray();
       $selectedSubjectIds = $students->subjects->Pluck('id')->toArray();
      

       return view('student.edit',compact('students','grades','hcolors','subjects','selectedSubjectIds'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    
    $student = Student::find($id);
    $student->update($request->except('subject_id'));

    $student->subjects()->detach();
    
    $subjects = $request->input('subject_id');
    $student->subjects()->attach($subjects);

    return redirect()
        ->route('student.index')
        ->withMessage('Student has been updated successfully!!!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $students=Student::find($id);
        $students->delete();
        return redirect()
        ->route('student.index')
        ->withMessage('Student has been deleted successfully!!!');
    }
}
