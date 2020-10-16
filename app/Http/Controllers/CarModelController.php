<?php

namespace App\Http\Controllers;

use App\Models\CarModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CarModelController extends Controller {
    public function index(){
        return view('CarModels.index', ['carModels' => CarModel::orderBy('price')->get()]);
    }
    // ATTENTION :: we need cars to be able to assign them
    public function create(){
        $cars = \App\Models\Car::orderBy('title')->get();
        return view('CarModels.create', ['cars' => $cars]);
    }
    public function store(Request $request){
        $carModel = new CarModel();
        // can be used for seeing the insides of the incoming request
        // var_dump($request->all()); die();

        if($request['title'] === null) {
            return Redirect::back()->withErrors(['Must enter title of a car!']);
        } else if($request['yearsReleased'] === null) {
            return Redirect::back()->withErrors(['Must enter cars year of released!']);
        } else if($request['topSpeed'] === null) {
        return Redirect::back()->withErrors(['Must enter cars top speed!']);
        } else if($request['price'] === null) {
            return Redirect::back()->withErrors(['Must enter cars price!']);
        } else if($request['description'] === null) {
            return Redirect::back()->withErrors(['Must enter car description!']);
        } else {
        $carModel->fill($request->all());
        $carModel->save();
        return redirect()->route('carModel.index');
         }
    } 

    public function show(CarModel $carModel){
        //
    }
    // ATTENTION :: we need cars to be able to assign them
    public function edit(CarModel $carModel){
        $cars = \App\Models\Car::orderBy('title')->get();
        return view('CarModels.edit', ['carModel' => $carModel, 'cars' => $cars]);
    }


    public function update(Request $request, CarModel $carModel){
        if($request['title'] === null) {
            return Redirect::back()->withErrors(['Must enter title of a car!']);
        } else if($request['yearsReleased'] === null) {
            return Redirect::back()->withErrors(['Must enter cars year of released!']);
        } else if($request['topSpeed'] === null) {
        return Redirect::back()->withErrors(['Must enter cars top speed!']);
        } else if($request['price'] === null) {
            return Redirect::back()->withErrors(['Must enter cars price!']);
        } else if($request['description'] === null) {
            return Redirect::back()->withErrors(['Must enter car description!']);
        } else {
        $carModel->fill($request->all());
        $carModel->save();
        return redirect()->route('carModel.index');
        }
    }

    public function destroy(CarModel $carModel){
        $carModel->delete();
        return redirect()->route('carModel.index');
    }
}