<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log In</title>
  <x-header />
 
  <x-nav />
</head>
<body>
<br /> <br /> <br /> <br /><br /> <br />
<div class="col-sm-4 mx-auto mb-3 mt-5">
    
    @if(Session::get('error'))
    <div class="alert alert-success alert-dismissible fade show" role ="alert">
    {{Session::get('error')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div> -->
     @endif

    <form action="login" method ="post" class="rouded-sm-500 py-2 px-2 ml-4 mt-3">
    @csrf
        <h3 class="color-b font-bold">Login!</h3>
        <div class="form-group">
            <div class="form-group">
            <label>Email</label>
            <input type ="text" name="email" value="{{ old('email') }}" 
            class="form-control" placeholder="Enter Your Email">
        </div>
        @error('email')
        <div class="alert alert-danger">{{ $message}}</div>
        @enderror <br />

        <div class ="form-group">
            <label>Password</label>
            <input type ="password" name="password"  class="form-control" 
            placeholder="Enter Your Password">
        </div>
        @error('password')
        <div class="alert alert-danger">{{ $message}}</div>
        @enderror
        <button class="btn btn-success ml-7  border border-bold rounded-xl"> Submit</button>
        </div>
        
    </form>
    </div>
    <x-footer />
</body>
</html>