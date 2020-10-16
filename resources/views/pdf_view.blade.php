<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF Demo in Laravel 7</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  </head>
  <body>
    <table class="table table-bordered">
    <thead>
      <tr class="table-danger">
        <td>Name</td>
        <td>Email</td>
        <td>Phone Number</td>
        <td>Comment</td>
        <td>Car Manufacturer</td>
      </tr>
      </thead>
      <tbody>
        @foreach ($customer as $data)
        <tr>
            <td>{{ $data->name }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->phone }}</td>
            <td>{{ $data->comment }}</td>
            <td>{{ $data->car['title'] }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </body>
</html>
