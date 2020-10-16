@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h2>Customers car manufacturers details</h2></div>
                <div class="card-body">
                    <table class="table table-bordered mb-0">
                        <thead>
                        <tr>
        <th><h3>Customer:</h3> {{ $customer->name }} {{$customer->surname}}</th>
        <th><h3>Phone:</h3> {{ $customer->phone }}</th>
        <th><h3>Email:</h3> {{ $customer->email }}</th>
        <th><h3>Comments:</h3> {!! $customer->comment !!}</th>
        <th><h3>Customers car manufacturer:</h3>  {{ $customer->car['title'] }}</th>
    </tr>
</thead>

<div class="card-body">
    <table class="table table-bordered mb-0">
        <hr>
        <th><h2>Available cars of this manufacturer: </h2></th>
        <tbody>
        <tr>
                <th><h3>Car title</h3></th>
                <th><h3>Release year</h3></th>
                <th><h3>Top speed</h3></th>
                <th><h3>Price</h3></th>
                <th><h3>Description</h3></th>
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
        </tbody>
        </table>
    </div>
</div>
@endsection
