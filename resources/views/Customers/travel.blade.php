@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Customer and his car manufacturer details</div>
    <div class="card-body">
        <h5>Customer: {{ $customer->name }} {{$customer->surname}}</h5>
        <h5>Phone: {{ $customer->phone }}</h5>
        <h5>Email: {{ $customer->email }}</h5>
        <h5>Comments: {!! $customer->comment !!}</h5>
        <hr>
        <h5>Customers car manufacturer:  {{ $customer->car['title'] }}</h5>
        <h5>Available cars of this manufacturer: </h5>
        <table class="table">
            <tr>
                <th>Car title</th>
                <th>Car release year</th>
                <th>Car top speed</th>
                <th>Car price</th>
                <th>Car description</th>
            </tr>
            @foreach ($customer->car->carModels as $carModel)
            <tr>
                <th>{{ $carModel->title }}</th>
                <th>{{ $carModel->yearsReleased }}</th>
                <th>{{ $carModel->topSpeed }}</th>
                <th>{{ $carModel->price }}</th>
                <th>{!! $carModel->description !!}</th>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection