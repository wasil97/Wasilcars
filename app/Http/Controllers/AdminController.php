<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       if( Session::get('user') == null){
        return view('admin.login');
       }
       else{
        $cars = Car::all();
        return view('admin.carlist', ['cars' => $cars]);
       }
    }

    public function login()
    {
        return view('admin.login');
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
    public function store(Request $request)
    {
        
        $validatedData = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed'
        ]);
    
        Admin::create($validatedData);
        $msg = "Registeration Complete!";
        return view('admin.login', ['msg' => $msg]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
       /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Admin::where('email', $request->email)->where('password', $request->password)->first() != null) {
            Session::put('user', $request->email);
            $cars = Car::all();
            return view('admin.carlist', ['cars' => $cars]);
        }
        else{
            $msg = "Invalid Email or Password!";
            return view('admin.login', ['msg' => $request->password]);
        }
    }

        /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Session::forget('user');
        $cars = Car::all();
        return view('index', ['cars' => $cars]);
    }

}
