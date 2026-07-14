<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    

<a  class="btn btn-primary" href="{{route('driver.create')}}">Create</a>

  <table class="table table-dark  table-striped w-75 m-auto my-3">
    <thead>
        <th>index</th>
        <th>name</th>
        <th>email</th>
        <th>Show</th>
     
    </thead>
    <tbody>
        @foreach($drivers as $driver)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$driver->name}}</td>
            <td>{{$driver->email}}</td>
            <td><a class="btn btn-warning" href="{{route('driver.show',$driver->id)}}">Show</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class=" w-50 m-auto">
    {{$drivers->links()}}
</div>

</body>
</html>