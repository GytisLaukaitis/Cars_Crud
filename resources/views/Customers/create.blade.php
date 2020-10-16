@extends('layouts.app')
@section('content')
<div class="container">
    @if($errors->any())
    <h4 style="color: red">{{$errors->first()}}</h4>
    @endif
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Let's create a customer:</div>
               <div class="card-body">
                   <form action="{{ route('customers.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Name: </label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Surname: </label>
                            <input type="text" name="surname" class="form-control"> 
                        </div>
                        <div class="form-group">
                            <label>Phone: </label>
                            <input type="number" name="phone" class="form-control"> 
                        </div>
                        <div class="form-group">
                            <label>Email: </label>
                            <input type="text" name="email" class="form-control"> 
                        </div>
                        <div class="form-group">
                            <label>Comments: </label>
                            <textarea id="mce" name="comment" rows=10 cols=100 class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Car manufacturer: </label>
                            <select name="car_id" id="" class="form-control">
                                 <option value="" selected enabled>Choose a car manufacturer</option>
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