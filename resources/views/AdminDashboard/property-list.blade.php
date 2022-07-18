 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Property-List</title>
     <x-header />

     <style> 
     body{
         background-color: grapheme_extract;
     }
        table{
            border-collapse: collapse;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            text-size-adjust: 2px;
        }
        td,th{
            padding: 1px;
            border: 2px solid black;
        }

    </style>

 </head>
 <body>
     <br /> <br /> <br /> <br /> <br /><br />
     <form action ="{{ url('/search-record')}}" method="post"> 
         @csrf
         <input type="text" name="title" />
         <input type="submit" value="Search" />
     </form>
     <x-nav />
    @if(Session::has(['delete-property']))
    <span>{{ Session::get('update-property')}}</span>
    @endif

 <a style="float:right" href="{{ route('create-property')}}"> Add Property</a>
     
        <div class="">
        <table>
         <tr>
            
            <th border="4"> Id</th>
             <th> Title</th>
             <th> Address</th>
             <th> Description</th>
             <th> image_path</th>
             <th> property_type</th>
             <th> Price</th>
             <th> Bed-rooms</th>
            <th> caetegory</th>
            <th> caetegory_type</th>
            <th> location</th>
            <th> state</th>
            <th> Action</th>
            </tr>
            @foreach($properties as $property)
            <tr>
                <td> {{ $property->id}}</td>
                <td> {{ $property->title}}</td>
                <td> {{ $property->address}}</td>
                <td> {{ $property->description}}</td>
                <td> {{ $property->image_path}}</td>
                <td> {{ $property->propertyType->name}}</td>
                <td> {{ $property->price}}</td>
                <td> {{ $property->bedrooms}}</td>
                <td> {{ $property->category->name}}</td>
                <td> {{ $property->categoryType->name}}</td>
                <td> {{ $property->location->name}}</td>
                <td> {{ $property->state->name}}</td>
                <td>

                <a href="edit-property/{{$property->id}}"> Edit </a>
                    <a href="delete-property/{{$property->id}}"> Delete </a>
                    </td>
            </tr>
            @endforeach
    </div>
     </table>
 </body>
 </html>