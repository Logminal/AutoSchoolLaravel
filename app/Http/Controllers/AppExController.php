<?php

namespace App\Http\Controllers;

use App\Models\AppEx;
use App\Models\Application;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppExController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $user_id = User::find(Auth::user()->id)->id;

        $cours_id = Course::find($id)->id;

        $appEx = AppEx::create([
            'user_id' => $user_id,
            'course_id' => $cours_id
        ]);

        return redirect()->route('home');
    }

    public function storeApp(Request $request, $id)
    {
        $appEx = AppEx::find($id);
        // dd($appEx->course_id);

        $app = Application::create([
            'user_id' => $appEx->user_id,
            'course_id' => $appEx->course_id
        ]);

        AppEx::find($id)->delete();

        return redirect()->route('adminPanel');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AppEx  $appEx
     * @return \Illuminate\Http\Response
     */
    public function show(AppEx $appEx)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AppEx  $appEx
     * @return \Illuminate\Http\Response
     */
    public function edit(AppEx $appEx)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AppEx  $appEx
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AppEx $appEx)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AppEx  $appEx
     * @return \Illuminate\Http\Response
     */
    public function destroy(AppEx $appEx)
    {
        //
    }
}
