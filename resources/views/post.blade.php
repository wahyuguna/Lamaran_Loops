<!DOCTYPE html>
<html lang="en">
<head>
  <title>All Post</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>



<div class="container">
<br>
<center><a href="{{route('home')}}"><button type="button" class="btn btn-primary">HOME</button></a></center>
<br>
  @foreach ($post as $data)
  <div class="card">
    <div class="card-header">
      Post from : {{$data->user->name}}
    </div>
    <div class="card-body">
      <h5 class="card-title">{{$data->title}}</h5>
      <p class="card-text">{{$data->content}}</p>
      <a href="{{route('Comment.show', $data->slug )}}" class="btn btn-primary">Go Comment</a>
    </div>
  </div>
  <br>
  @endforeach
</div>

</body>
</html>