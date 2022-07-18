<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register User</title>
  <x-header />
  <x-search />
</head>
<body>
<x-nav />
<br /> <br /><br /><br /><br />
<div class="col-sm-4 mx-auto mb-3 mt-5">
    
    @if(Session::get('error'))
    <div class="alert alert-success alert-dismissible fade show" role ="alert">
    {{Session::get('error')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div> -->
     @endif

    <form action="registerUser" method ="post" 
    class="border border-solid-xl rouded-sm-500 py-2 px-2 ml-4 mt-3">
        <h3 class="font-bold color-b">Register!</h3>
        @csrf 
       
        <div class="form-group">
            <label>Name</label>
            <input type ="text" name="name" value="{{ old('name') }}" 
            class="form-control" placeholder="Enter Your Name">
        </div>
        @error('name')
        <div class="alert alert-danger">{{ $message}}</div>
        @enderror <br />

        <div class="form-group">
            <label>User Name</label>
            <input type ="text" name="username" value="{{ old('username') }}" 
            class="form-control" placeholder="Enter Your User Name">
        </div>
        @error('username')
        <div class="alert alert-danger">{{ $message}}</div>
        @enderror <br />

        <div class="form-group">
            <label>Email</label>
            <input type ="email" name="email" value="{{ old('email') }}" 
            class="form-control" placeholder="Enter Your Email">
        </div>
        @error('email')
        <div class="alert alert-danger">{{ $message}}</div>
        @enderror <br />

        <div class ="form-group">
            <label>Password</label>
            <input type ="password" name="password"  
            class="form-control" placeholder="Enter Your Password">
        </div>
        @error('password')
        <div class="alert alert-danger">{{ $message}}</div>
        @enderror
        <input type="hidden" name="user_type_id" value="2">
        <button class="ml-7  border border-bold rounded-xl"> Submit</button>
        </div>
        
    </form>
    </div>
    <x-footer />
</body>
</html>