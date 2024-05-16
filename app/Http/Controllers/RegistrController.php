<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class RegistrController extends Controller
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
        return view('auth.reg');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'login' => ['required', 'string'],
            'surname' => ['required', 'string'],
            'patronymic' => ['required', 'string'],
            'password' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'status' => 'user'
        ]);

        $user = User::create([
            'login' => $request->login,
            'surname' => $request->surname,
            'patronymic' => $request->patronymic,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'status' => 'user'
        ]);

        Auth::login($user);

        return redirect(route('home'));
    }
}
