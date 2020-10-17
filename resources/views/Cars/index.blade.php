@extends('layouts.app')
@section('content')
<div class="container">
    @if($errors->any())
    <h4 style="color: red">{{$errors->first()}}</h4>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Manufacturers - list
                    <a href="{{ route('car.create') }}" class="btn btn-sm btn-primary float-right">Add
                        New</a>
                </div>
    <div class="card-body">
    <table class="table table-bordered table-responsive">
        <thead>
        <tr>
            <th style="width: 15%">Title</th>
            <th style="width: 15%">Manufacturer country</th>
            <th style="width: 56%">Description</th>
            <th style="width: 14%">Actions</th>
        </tr>
        </thead>

        <tbody>
        @foreach ($cars as $car)
        <tr>
            <td>{{ $car->title }}</td>
            <td>{{ $car->madein }}</td>
            <td>{!! Str::limit($car->description, 80) !!}</td>
            <td style="width: 12%">
                <form action={{ route('car.destroy', $car->id) }} method="POST">
                    <a class="btn btn-sm btn-primary" href={{ route('car.edit', $car->id) }}>Edit</a>
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
