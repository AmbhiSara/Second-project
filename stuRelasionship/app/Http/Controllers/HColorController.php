<?php

namespace App\Http\Controllers;

use App\Models\HColor;
use App\Models\Student;
use Illuminate\Http\Request;

class HColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hcolors=HColor::all();
        return view('hcolor.index',compact('hcolors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hcolor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $hcolors=$request->all();
        HColor::create($hcolors);
        return redirect()
        ->route('hcolor.index')
        ->withMessage('HColor has been created successfully!!!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $hcolors=HColor::find($id);
       // dd($hcolors);
        $students=HColor::find($id)->students;
//return $students;
        return view('hcolor.show',compact('hcolors','students'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $hcolors=HColor::find($id);
        $students=HColor::find($id)->students;
        
        return view('hcolor.edit',compact('hcolors','students'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $hcolors=HColor::find($id);
        $hcolors->update($request->all());
        return redirect()
        ->route('hcolor.index')
        ->withMessage('HColor has been updated successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       
        $hcolors=HColor::find($id);
        $hcolors->delete();
        return redirect()->route('hcolor.index')
        ->withMessage('HColor has been deleted successfully!!!');
    }
}
