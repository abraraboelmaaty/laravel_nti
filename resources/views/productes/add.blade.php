<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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




<div class="container">
  <h2>Vertical (basic) form</h2>
  <form   action ="{{url('/product')}}"    method="post" enctype ="multipart/form-data">
 

   {{-- <input type="hidden" name="_token" value="<?php //echo csrf_token();?>"> --}}


    @csrf


  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name"  value="{{ old('name') }}"  class="form-control" id="exampleInputName" aria-describedby="" placeholder="Enter Name">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email"  name="descriotion"  value="{{ old('descriotion') }}"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">New Password</label>
    <input type="password"  name="price"  value="{{ old('price') }}" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>

