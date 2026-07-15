<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    

<a  class="btn btn-primary" href="{{url('/cars')}}">Back</a>

  <div class="container bg-amber-100">
    <div class="row">
        @foreach($cars as $car)
         <div class="col-md-4 my-2">
            <div class="item text-center">
            <img class="w-100" src="{{asset('storage/'.$car->image)}}" alt="">
            <h2>Model: {{$car->model}}</h2>
             <span>Price: {{$car->price}}</span>   
              <a class="btn btn-secondary" href="{{url('restore/'.$car->id)}}">restore</a>    
<!-- <form action="{{ url('/delete/'.$car->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-danger">
        Delete
    </button>
</form> -->


              <!-- <a href="{{url('/delete/'.$car->id)}}" class="btn btn-danger" >Delete</a> -->

            </div>
         </div>
        @endforeach
    </div>
  </div>
   
   


</body>
</html>