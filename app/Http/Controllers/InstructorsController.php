<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Http\Request;

class InstructorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('instructors', [
            'instructors' => Instructor::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('instructors.createInstructor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('img');

        $path = $image->store('images', 'public');

        $img = $path;

        // dd($request);

        $instructor = Instructor::create([
            'img' => $img,
            'name' => $request->name,
            'experience' => $request->experience,
            'driving_experience' => $request->driving_experience
        ]);

        return redirect()->route('instructor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Instructors  $instructors
     * @return \Illuminate\Http\Response
     */
    public function show(Instructor $instructors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Instructors  $instructors
     * @return \Illuminate\Http\Response
     */
    public function edit(Instructor $instructors, $id)
    {
        return view('instructors.updateInstructor', [
            'instructor' => Instructor::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Instructors  $instructors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Instructor $instructors, $id)
    {
        $instructor = Instructor::find($id);

        if ($request->hasFile('img')) {
            $image = $request->file('img');

            $path = $image->store('images', 'public');
            $instructor->img = $path;
        }

        $instructor->name = $request->name;
        $instructor->experience = $request->experience;
        $instructor->driving_experience = $request->driving_experience;

        $instructor->update();


        return redirect(route('instructor.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Instructors  $instructors
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instructor $instructors, $id)
    {
        Instructor::find($id)->delete();
        return redirect()->route('instructor.index');
    }
}
