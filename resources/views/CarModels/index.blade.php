@extends('layouts.app')
@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Cars - list
                    <a href="{{ route('carModel.create') }}" class="btn btn-sm btn-primary float-right">Add
                        New</a>
                </div>
    <div class="card-body">
    <table class="table table-bordered table-responsive">
        <thead>
        <tr>
            <th style="width: 10%">Title</th>
            <th style="width: 10%">Years relesead</th>
            <th style="width: 10%">Top Speed</th>
            <th style="width: 10%">Price</th>
            <th style="width: 36%">Description</th>
            <th style="width: 10%">Manufacturer</th>
            <th style="width: 14%">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($carModels as $carModel)
        <tr>
            <td>{{ $carModel->title }}</td>
            <td>{{ $carModel->yearsReleased }}</td>
            <td>{{ $carModel->topSpeed }}</td>
            <td>{{ $carModel->price }}</td>
            <td>{!! Str::limit($carModel->description, 80) !!}</td>
            <td>{{ $carModel->car['title'] }}</td>
            <td>
                <form action={{ route('carModel.destroy', $carModel->id) }} method="POST">
                    <a class="btn btn-sm btn-primary" href={{ route('carModel.edit', $carModel->id) }}>Edit</a>
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
</div>
@endsection
