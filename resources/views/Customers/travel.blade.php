@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h2>Info about customer and car manufacturer</h2></div>
                <div class="card-body">
                    <table class="table table-bordered table-responsive">
                        <thead>
                        <tr>
        <th style="border-top: none; border-bottom: none; border-left: none;"><h3>Customer:</h3> <h6 style="font-weight: 900; color: red">{{ $customer->name }} {{$customer->surname}}</h6></th>
        <th style="border-top: none; border-bottom: none"><h3>Phone:</h3> <h6 style="font-weight: 900; color: red">{{ $customer->phone }}</h6></th>
        <th style="border-top: none; border-bottom: none"><h3>Email:</h3> <h6 style="font-weight: 900; color: red">{{ $customer->email }}</h6></th>
        <th style="border-top: none; border-bottom: none; width: 30%;"><h3>Comments:</h3> <h6 style="font-weight: 900; color: red">{!! $customer->comment !!}</h6></th>
        <th style="border-right: none; border-top: none; border-bottom: none;"><h3>Car manufacturer:</h3>  <h6 style="font-weight: 900; color: red;">{{ $customer->car['title'] }}</h6></th>
    </tr>
</thead>

<div class="card-body">
    <table class="table table-bordered table-responsive">
        <hr>
        <h2 style="margin-bottom: 50px; margin-top: 50px;">Available cars of this manufacturer: </h2>
        <tbody>
        <tr>
                <th style="border-top: none; border-left: none;"><h3>Car title</h3></th>
                <th style="border-top: none"><h3>Release year</h3></th>
                <th style="border-top: none"><h3>Top speed</h3></th>
                <th style="border-top: none"><h3>Price</h3></th>
                <th style="border-right: none; border-top: none; width: 100%"><h3>Description</h3></th>
            </tr>
            @foreach ($customer->car->carModels as $carModel)
            <tr style="color: red;">
                <th style="border-top: none; border-bottom: none; border-left: none">{{ $carModel->title }}</th>
                <th style="border-top: none; border-bottom: none">{{ $carModel->yearsReleased }}</th>
                <th style="border-top: none; border-bottom: none">{{ $carModel->topSpeed }}</th>
                <th style="border-top: none; border-bottom: none">{{ $carModel->price }}</th>
                <th style="border-right: none; border-bottom: none;">{!! $carModel->description !!}</th>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</div>
@endsection
