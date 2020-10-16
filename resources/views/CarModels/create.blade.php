@extends('layouts.app')
@section('content')
<div class="container">
    @if($errors->any())
    <h4 style="color: red">{{$errors->first()}}</h4>
    @endif
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Let's create new car:</div>
               <div class="card-body">
                   <form action="{{ route('carModel.store') }}" method="POST">
                       @csrf
                       <div class="form-group">
                            <label for="">Title: </label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Years released: </label>
                            <input type="text" name="yearsReleased" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Top Speed: </label>
                            <input type="number" name="topSpeed" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Price: </label>
                            <input type="number" name="price" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Description: </label>
                            <textarea id="mce" name="description" rows=10 cols=100 class="form-control"></textarea>
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
                       <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
