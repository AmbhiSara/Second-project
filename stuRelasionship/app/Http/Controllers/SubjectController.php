<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $subjects=Subject::all();
       return view('subject.index',compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('subject.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $subjects=$request->all();
       Subject::create($subjects);
       return redirect()
       ->route('subject.index')
       ->withMessage('Subject has been created successfully!!!');
         
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $subjects=Subject::find($id);
        $students=Subject::find($id)->students;
        
        return view('subject.show',compact('subjects'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $subjects=Subject::find($id);
        return view('subject.edit',compact('subjects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $subjects=Subject::find($id);
        $subjects->update($request->all());
        return redirect()
        ->route('subject.index')
        ->withMessage('Subject has been updated successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subjects=Subject::find($id);
        $subjects->delete();
        return redirect()
        ->route('subject.index')
        ->withMessage('Subject has been deleted successfully!!!');
    }
}
