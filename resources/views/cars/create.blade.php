<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

   <form method="post" action="{{route('car.store')}}" class="w-75 m-auto mt-3" enctype="multipart/form-data" >
    @csrf

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">model</label>
    <input type="text"  name="model" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">price</label>
    <input type="number" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

<div class="mb-3">
    <input type="file"  name="image" class="form-control" id="exampleInputPassword1">
  </div>



  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>