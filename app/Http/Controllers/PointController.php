<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Points;
use App\Student;

class PointController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $points = Points::all();
        return view('admin.points.index', compact('points'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::orderBy('nrp')->get();
        return view('admin.points.create', compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $students = $request->student_id;
        $point = (float)$request->point;
        $note = $request->note;

        foreach ($students as $id) {
            $item = new Points([
                'student_id' => (int)$id,
                'point' => $point,
                'note' => $note,
            ]);
            $item->save();
        }

        return redirect()->route('points.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Points $point)
    {
        return view('admin.points.edit', compact('point'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Points $point)
    {
        $point->update($request->all());
        return redirect()->route('points.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
