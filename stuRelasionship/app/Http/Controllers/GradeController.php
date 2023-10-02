<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $grades=Grade::all();
       return view('grade.index',compact('grades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('grade.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $grades=$request->all();
       Grade::create($grades);

       return redirect()
       ->route('grade.index')
       ->withMessage('Grade has been created successfully!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $grades=Grade::find($id);
       $students=Grade::find($id)->Students;

       return view('grade.show',compact('grades','students'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $grades=Grade::find($id);
       $students=Grade::find($id)->Students;
       return view('grade.edit',compact('grades','students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $grades=Grade::find($id);
        $grades->update($request->all());
        return redirect()
        ->route('grade.index')
        ->withMessage('Grade has been updated successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $grades=Grade::find($id);
        $grades->delete();
        return redirect()
        ->route('grade.index')
        ->withMessage('Grade has been deleted successfully!!!');
    }
}
