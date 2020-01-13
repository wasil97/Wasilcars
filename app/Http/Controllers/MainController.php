<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        return view('index', ['cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('car.add');
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
            'description' => 'required',
            'color' => 'required',
            'make' => 'required',
            'model' => 'required'
        ]);
    
        Car::create($validatedData);
        $cars = Car::all();
        return view('admin.carlist', ['cars' => $cars]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::find($id);
        return view('car.cardetail')->with('car' , $car);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::find($id);
        return view('car.edit')->with('car' , $car);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'description' => 'required',
            'color' => 'required',
            'make' => 'required',
            'model' => 'required'
        ]);

        $car = Car::find($id);
        $car->name = request('name');
        $car->description = request('description');
        $car->color = request('color');
        $car->make = request('make');
        $car->model = request('model');
        $car->save();

        $cars = Car::all();
        return view('admin.carlist', ['cars' => $cars]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();
        $cars = Car::all();
        return view('admin.carlist', ['cars' => $cars]);
    }
}
