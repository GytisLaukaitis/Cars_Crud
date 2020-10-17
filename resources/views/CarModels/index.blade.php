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
    <table class="table table-bordered mb-0">
        <thead>
        <tr>
            <th>Title</th>
            <th>Years relesead</th>
            <th>Top Speed</th>
            <th>Price</th>
            <th>Description</th>
            <th>Manufacturer</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($carModels as $carModel)
        <tr>
            <td>{{ $carModel->title }}</td>
            <td>{{ $carModel->yearsReleased }}</td>
            <td>{{ $carModel->topSpeed }}</td>
            <td>{{ $carModel->price }}</td>
            <td>{!! Str::limit($carModel->description, 20) !!}</td>
            <td>{{ $carModel->car['title'] }}</td>
            <td style="width: 12%">
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
