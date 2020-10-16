@extends('layouts.app')
@section('content')
<div class="container">
    @if($errors->any())
    <h4 style="color: red">{{$errors->first()}}</h4>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Let's Change Manufacturers info</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('car.update', $car->id) }}">
                        @csrf @method("PUT")
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control" value="{{ $car->title }}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Manufacturers country</label>
                            <input type="text" name="madein" class="form-control" value="{{ $car->madein }}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea id="mce" name="description" class="form-control" value="{{ $car->description }}"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Change</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
