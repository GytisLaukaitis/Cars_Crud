@extends('layouts.app')
@section('content')
<div class="container">
    @if($errors->any())
    <h4 style="color: red">{{$errors->first()}}</h4>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Let's change car info</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('carModel.update', $carModel->id) }}">
                        @csrf @method("PUT")
                        <div class="form-group">
                            <label for="">Title: </label>
                            <input type="text" name="title" class="form-control" value="{{ $carModel->title }}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Years released: </label>
                            <input type="text" name="yearsReleased" class="form-control" value="{{ $carModel->yearsReleased }}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Top Speed: </label>
                            <input type="number" name="topSpeed" class="form-control" value="{{ $carModel->topSpeed }}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Price: </label>
                            <input type="number" name="price" class="form-control" value="{{ $carModel->price }}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea id="mce" name="description" class="form-control" value="{{ $carModel->description }}"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Manufacturer: </label>
                            <select name="car_id" id="" class="form-control">
                                 <option value="" selected enabled>Choose a manufacturer</option>
                                 @foreach ($cars as $car)
                                 <option value="{{ $car->id }}">{{ $car->title }}</option>
                                 @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Change</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
