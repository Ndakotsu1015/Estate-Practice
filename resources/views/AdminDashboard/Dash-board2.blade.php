<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Property</title>
  <x-header />
  
</head>
<body>
<x-nav /> <br /> <br /><br /><br />

<div class="col-sm-4 mx-auto mb-3 mt-5" >
    
    @if(Session::get('error'))
    <div class="alert alert-danger alert-dismissible fade show" role ="alert">
    {{Session::get('error')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
     @endif

     @if(Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role ="alert">
    {{Session::get('success')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
     @endif

    <form action="/add-property" method ="post" 
    class=" border border-solid-xl rouded-sm-500 py-2 px-2 ml-4 mt-3"> <br />
        <h3 class="font-bold  color-b"> Add Property </h3>
        @csrf 
       
        <div class="form-group">
            <label>Title</label>
            <input type ="text" name="title" value="{{ old('title') }}" 
            class="form-control" placeholder="Enter Your Title">
        </div>
        @error('title')
        <div class="alert alert-danger">{{ $message}}</div>
        @enderror <br />

        <div class="form-group">
            <label>Description</label>
            <input type ="text" name="description" value="{{ old('description') }}" 
            class="form-control" placeholder="Enter Your Description">
        </div>
        @error('description')
        <div class="alert alert-danger">{{ $message}}</div>
        @enderror <br />

        <div class="form-group">
            <label>Address</label>
            <input type ="text" name="address" value="{{ old('address') }}" 
            class="form-control" placeholder="Enter Your Address">
        </div>
        @error('address')
        <div class="alert alert-danger">{{ $message}}</div>
        @enderror <br />

        <div class ="form-group">
            <label> Price</label>
            <input type ="number" name="price"  
            class="form-control" placeholder="Enter Your Price">
        </div>
        @error('price')
        <div class="alert alert-danger">{{ $message}}</div>
        @enderror <br />

        <div class ="form-group">
            <label> Bed-Rooms</label>
            <input type ="number" name="bedrooms"  
            class="form-control" placeholder="Enter Bed-rooms">
        </div>
        @error('bedrooms')
        <div class="alert alert-danger">{{ $message}}</div>
        @enderror <br />

        <div class ="form-group">
            <label> State</label>
            <select name="state">
                @foreach($states as $state)
                <option value="{{ $state->id }}">{{ $state->name }}</option>
                @endforeach
            </select>  
        </div>
        @error('state')
        <div class="alert alert-danger">{{ $message}}</div>
        @enderror <br />


        <div class ="form-group">
            <label> Location </label>
            <select name="location">
                @foreach($locations as $location)
                <option value="{{ $location->id }}">{{ $location->name }}</option>
                @endforeach
            </select>  
        </div>
        @error('location')
        <div class="alert alert-danger">{{ $message}}</div>
        @enderror <br />

        <div class ="form-group">
            <label> Category Type</label><br>
            <select name="category_type">
                @foreach($categoryTypes as $categoryType)
                <option value="{{ $categoryType->id }}">{{ $categoryType->name }}</option>
                @endforeach
            </select>  
        </div>
        @error('category_type')
        <div class="alert alert-danger">{{ $message}}</div>
        @enderror <br />

        <div class ="form-group">
            <label> Category</label>
            <select name="category">
                @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>  
        </div>
        @error('category')
        <div class="alert alert-danger">{{ $message}}</div>
        @enderror <br />

         <div class ="form-group">
        <label> Property Type</label> <br />
        <select name="property_type">
        @foreach($propertyTypes as $propertyType)
        <option value="{{ $propertyType->id }}">{{ $propertyType->name }}</option>
                @endforeach
            </select>  
        </div>
        @error('property_type')
        <div class="alert alert-danger">{{ $message}}</div>
        @enderror <br /> 

                <div class ="form-group">
            <label> Upload Image</label>
            <input type ="file" name="image_path"  
            class="form-control" placeholder="Upload Image">
        </div>
        @error('image_path')
        <div class="alert alert-danger">{{ $message}}</div>
        @enderror <br />


        <button class="ml-7  border border-bold rounded-xl"> Submit</button>
        </div>
        
    </form>
    </div>
    <x-footer />
</body>
</html>