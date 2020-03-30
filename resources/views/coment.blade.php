<!DOCTYPE html>
<html lang="en">
<head>
  <title>Comment</title>
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
  <br>
  @if($errors->any())
    <div class="alert alert-danger">Data Yang anda masukan Tidak lengkap</div>
  @endif
  <!-- Pengumuman Sukses -->
  @if(session()->has('message'))
      <div class="alert alert-success">
          {{ session()->get('message') }}
      </div>
  @endif
  @if(session()->has('warning'))
      <div class="alert alert-warning">
          {{ session()->get('warning') }}
      </div>
  @endif

   <div class="card">
    <div class="card-header">
      Post from : {{$post->user->name}}
    </div>
    <div class="card-body">
      <h5 class="card-title">{{$post->title}}</h5>
      <p class="card-text">{{$post->content}}</p>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-sm-1">
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Comment this Post : </h5>
          <form method="post" action="{{route('Comment.store')}}">
            {!! csrf_field() !!}
            {{ method_field('POST') }}
            <input type="hidden" name="post_id" value="{{$post->id}}">
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{Auth::user()!= null ? Auth::user()->email : '' }}" required>
            </div>
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control"  placeholder="Enter name" name="name" value="{{Auth::user()!= null ? Auth::user()->name : '' }}" required>
            </div>
            <div class="form-group">
              <label for="website">Website:</label>
              <input type="text" class="form-control" placeholder="Enter password" name="website">
            </div>
            <div class="form-group">
              <label for="comment">Comment:</label>
              <input type="text" class="form-control" placeholder="Enter Comment" name="comment" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  @foreach ($comment as $data)
  <br>
  <div class="row">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-header">
          Post from : {{$data->name}}
        </div>
        <div class="card-body">
          <h5 class="card-title">{{$data->post->title}}</h5>
          <p class="card-text">{{$data->comment}}</p>
        </div>
      </div>
    </div>
  </div>
  @endforeach

  
</div>

</body>
</html>