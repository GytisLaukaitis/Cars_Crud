@extends('layouts.app')
@section('content')
<div class="container">
    @if($errors->any())
    <h4 style="color: red">{{$errors->first()}}</h4>
    @endif
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Let's create manufacturer:</div>
               <div class="card-body">
                   <form action="{{ route('car.store') }}" method="POST">
                       @csrf
                       <div class="form-group">
                           <label>Title: </label>
                           <input type="text" name="title" class="form-control" required>
                       </div>
                       <div class="form-group">
                        <label>Manufacturer country: </label>
                        <input type="text" name="madein" class="form-control" required>
                       </div>
                       <div class="form-group">
                        <label>Description: </label>
                        <textarea id="mce" name="description" rows=10 cols=100 class="form-control"></textarea>
                       </div>
                       <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
