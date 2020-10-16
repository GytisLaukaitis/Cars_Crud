<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Cars.index', ['cars' => Car::orderBy('title')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $car = new Car();
        // can be used for seeing the insides of the incoming request
        // var_dump($request->all()); die();
        if($request['title'] === null) {
            return Redirect::back()->withErrors(['Must enter manufacturers title!']);
        } else if($request['madein'] === null) {
            return Redirect::back()->withErrors(['Must enter manufacturers country!']);
        } else if($request['description'] === null) {
            return Redirect::back()->withErrors(['Must enter manufacturers description!']);
        }else {
        $car->fill($request->all());
        $car->save();
        return redirect()->route('car.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        return view('Cars.edit', ['car' => $car]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        if($request['title'] === null) {
            return Redirect::back()->withErrors(['Must enter manufacturers title!']);
        } else if($request['madein'] === null) {
            return Redirect::back()->withErrors(['Must enter manufacturers country!']);
        } else if($request['description'] === null) {
            return Redirect::back()->withErrors(['Must enter manufacturers description!']);
        }else {
        $car->fill($request->all());
        $car->save();
        return redirect()->route('car.index');
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        if (count($car->customers)){ 
            return back()->withErrors(['error' => ['This manufacturer has some clients. Unsign them first,before you delete this manufacturer']]);
        }
        $car->delete();
        return redirect()->route('car.index');
    }
}