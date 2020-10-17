<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Barryvdh\DomPDF\Facade as PDF;


class CustomerController extends Controller{
    public function index(Request $request){
        if(isset($request->car_id) && $request->car_id !== 0)
            $customers = \App\Models\Customer::where('car_id', $request->car_id)->orderBy('surname')->get();
        else
            $customers = \App\Models\Customer::orderBy('surname')->get();
        $cars = \App\Models\Car::orderBy('title')->get();
        return view('Customers.index', ['customers' => $customers, 'cars' => $cars]);
    }
    public function create(){
        $cars = \App\Models\Car::orderBy('title')->get();
        return view('Customers.create', ['cars' => $cars]);
    }
    public function store(Request $request){
        $customer = new Customer();
        // can be used for seeing the insides of the incoming request
        // var_dump($request->all()); die();

        if($request['name'] === null) {
            return Redirect::back()->withErrors(['Customer name is required!']);
        } else if($request['surname'] === null) {
            return Redirect::back()->withErrors(['Customer surname is required!']);
        } else if($request['email'] === null) {
            return Redirect::back()->withErrors(['Customer email is required!']);
         } else if($request['phone'] === null) {
            return Redirect::back()->withErrors(['Customer phone is required!']);
         }else {
        $customer->fill($request->all());
        $customer->save();
        return redirect()->route('customers.index');
         }
    }


    public function show(Customer $customer){
        //
    }
    public function edit(Customer $customer){
        $cars = \App\Models\Car::orderBy('title')->get();
        return view('Customers.edit', ['customer' => $customer, 'cars' => $cars]);
    }


    public function update(Request $request, Customer $customer){
        if($request['name'] === null) {
            return Redirect::back()->withErrors(['Customer name is required!']);
        } else if($request['surname'] === null) {
            return Redirect::back()->withErrors(['Customer surname is required!']);
        } else if($request['email'] === null) {
            return Redirect::back()->withErrors(['Customer email is required!']);
         } else if($request['phone'] === null) {
            return Redirect::back()->withErrors(['Customer phone is required!']);
         }else {
        $customer->fill($request->all());
        $customer->save();
        return redirect()->route('customers.index');
         }
    }


    public function destroy(Customer $customer, Request $request)
    {
        $customer->delete();
        return redirect()->route('customers.index', ['car_id'=> $request->input('car_id')]);
    }

    public function travel($id){
        $customer = Customer::find($id);
        return view('Customers.travel', ['customer' => $customer]);
    }

      // Generate PDF
      public function createPDF() {
        // retreive all records from db
        $data = Customer::all();

        // share data to view
        view()->share('customer',$data);
        $pdf = PDF::loadView('pdf_view', $data);

        // download PDF file with download method
        return $pdf->stream('pdf_view.pdf');
      }

}
