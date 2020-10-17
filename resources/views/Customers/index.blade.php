<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@extends('layouts.app')
@section('content')
<div class="container">


    <a class="btn btn-outline-primary" style="float: right; width: auto;" href="{{ URL::to('/customer/pdf') }}">Export to PDF <i class="far fa-file-pdf" style="color: red;font-size:48px"></i></a>
    <form action="{{ route('customers.index') }}" method="GET">
        <div class="input-group mb-3">
            <div style="height: 35px" class="input-group-append">
                <select name="car_id" id="" class="form-control">
                    <option value="" selected enabled>Choose a car manufacturer for filtering customers:</option>
                    @foreach ($cars as $car)
                    <option value="{{ $car->id }}"
                        @if($car->id == app('request')->input('car_id'))
                        selected="selected"
                        @endif>{{ $car->title }}</option>
                        @endforeach
                    </select>
                    <button style="margin-left: 5px;"  type="submit" class="btn btn-mb btn-outline-primary">Submit</button>
                </div>
            </div>
                </form>
    @if($errors->any())
    <h4 style="color: red">{{$errors->first()}}</h4>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Customers - list
                    <a href="{{ route('customers.create') }}" class="btn btn-sm btn-primary float-right">Add
                        New</a>
                </div>
    <div class="card-body">
    <table class="table table-bordered mb-auto">
        <thead>
        <tr>
            <th>Name</th>
            <th>Surname</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Comments</th>
            <th>Car manufacturer</th>
            <th>Actions</th>
        </tr>
        </thead>

        <tbody>
        @foreach ($customers as $customer)
        <tr>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->surname }}</td>
            <td>{{ $customer->phone }}</td>
            <td>{{ $customer->email }}</td>
            <td>{!! Str::limit($customer->comment, 20) !!}</td>
            <td>{{ $customer->car['title'] }}</td>
            <td style="width: 16%">
                <form action={{ route('customers.destroy', $customer->id) }} method="POST">
                    <a class="btn btn-sm btn-success" href={{ route('customers.edit', $customer->id) }}>Edit</a>
                    <a class="btn btn-sm btn-primary" href={{ route('customers.travel', $customer->id) }}>Info</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-sm btn-danger" value="Delete"/>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
