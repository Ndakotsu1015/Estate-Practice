<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
</head>
<body>
    @if(Session::has('post_update'))

    <span> {{Session::get('post_update')}}</span>

    @endif
    <form action="{{route('update.post')}}"> 
        @csrf
    <input type="hidden" name="id" value="{{$post->id}}">
    Post: <br> <input type="text" name="name" value="{{$post->name}}" placeholder="Enter Name" />
    Description: <br> <textarea name="description" cols="30" rows="10" value="{{$post->description}}"> </textarea>
    <input type="submit" value="Submit">
    </form>
</body>
</html>