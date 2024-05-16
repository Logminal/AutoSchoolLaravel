<?php

namespace App\Http\Controllers;

use App\Models\AppEx;
use App\Models\Application;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class MainController extends Controller
{
    public function allData()
    {
        return view('main');
    }

    public function kursB()
    {
        return view('block_kurs_B');
    }

    public function kursA()
    {
        // $courseA = Course::all();
        // $courses = [];
        // foreach ($courseA as $key => $value) {
        //     $courses = $value;
        // }
        // // dd($courses->id);
        // for ($i=0; $i < $courses->id; $i++) {
        //     // $courses->name = split($courses->name);
        // }

        // dd(str_split($courses->name_course));
        $courseA = Course::all()->where('category', 'A');
        // dd($courseA);

        return view('block_kurs_A', [
            'courseA' => $courseA,
        ]);
    }

    public function price()
    {

        $appex = AppEx::all()->where('user_id', Auth::id());
        $app = Application::all()->where('user_id', Auth::id());

        return view('prices', [
            'appEx' => $appex,
            'app' => $app,
            'courses' => Course::all(),
        ]);
    }

    public function priceCreate()
    {
        return view('courses.addCourse');
    }

    public function priceStore(Request $request)
    {
        $request->validate([
            'name_course' => ['required', 'unique:courses,name_course'],
            'price_course' => ['required'],
            'category' => ['required'],
        ]);

        $course = Course::create([
            'name_course' => $request->name_course,
            'price_course' => $request->price_course,
            'category' => $request->category,
        ]);

        return redirect()->route('price');
    }

    public function priceDelete($id)
    {
        Course::find($id)->delete();
        return redirect()->route('price');
    }

    public function priceEdit($id)
    {
        return view('courses.editcourse', [
            'course' => Course::find($id),
        ]);
    }

    public function priceUpdate(Request $request, $id)
    {
        $course = Course::find($id);

        $request->validate([
            'name_course' => ['required'],
            'price_course' => ['required'],
        ]);

        $course->name_course = $request->name_course;
        $course->price_course = $request->price_course;

        $course->update();
        return redirect()->route('price');
    }

    public function instructor()
    {
        return view('instructors');
    }

    public function writeCourse(Request $request)
    {

        $user = User::find(Auth::id());

        $user->course_id = $request->course_id;

        $user->update();

        return redirect(route('home'));
    }

    public function adminPanel(User $user, Course $Course)
    {
        return view('adminPanel', [
            'data' => AppEx::all()->where('course_id', !null),
            'app' => Application::all(),
        ]);
    }

    public function adminDelete(Request $request, $id)
    {
        AppEx::find($id)->delete();
        return redirect(route('adminPanel'));
    }

    public function adminDeleteApp($id)
    {
        Application::find($id)->delete();
        return redirect(route('adminPanel'));
    }
}
