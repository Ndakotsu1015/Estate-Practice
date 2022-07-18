<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryType;
use App\Models\Location;
use App\Models\Property;
use App\Models\PropertyType;
use App\Models\State;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Property1Controller extends Controller
{
    //
    public function create()
    {
        $users = User::all();
        $states = State::all();
        $locations =Location::all();
        $categories = Category::all();
        $categoryTypes = CategoryType::all();
        $propertyTypes = PropertyType::all();
        return view('AdminDashboard.add-property', 
        compact('categories', 'categoryTypes', 'propertyTypes', 'locations', 'states', 'users'));
    }
    public function addProperty()
    {
        $attributes = request()->validate([
            'title' => 'required',
            'address' => 'required',
            'description' => 'required',
            'image_path' => 'required',
            'price' => 'required',
            'bedrooms' => 'required',
            'category' => 'required',
            'category_type' => 'required',
            'property_type' => 'required',
            'location' => 'required',
            'state' => 'required',
            
        ]);

        // dd($attributes);
        $attributes['user_id'] = auth()->user()->id;
        $attributes['state_id'] = $attributes['state'];
        $attributes['location_id'] = $attributes['location'];
        $attributes['category_id'] = $attributes['category'];
        $attributes['category_type_id'] = $attributes['category_type'];
        $attributes['property_type_id'] = $attributes['property_type'];
        $attributes['approved'] = false;

        // dd($attributes);

        $property = Property::create($attributes);

        return redirect('/Dash-board')->with('success', 'Record Added Successfully!');
    }

    public function propertyLists()
    {
        // $property = DB::table('add-property')->get();
        $properties = Property::all();

        // dd($properties);
        return view('AdminDashboard.property-list', compact('properties'));
    }

    public function editProperty(Request $request)
    {
        $property =Property::where('id', $request->id)->first();
        $states = State::all();
        $locations =Location::all();
        $categories = Category::all();
        $categoryTypes = CategoryType::all();
        $propertyTypes = PropertyType::all();
        return view('AdminDashboard.Dash-board2', compact('property', 'categories', 'categoryTypes', 
        'propertyTypes', 'locations', 'states'));
    }
    public function updatePropery(Request $request)
    {
        $property= Property::where('id', $request->id)->update([
            'title' => 'required ',
            'address' => 'required ',
            'description' => 'required ',
            'image_path' => 'required ',
            'price' => 'required ',
            'bedrooms' => 'required',
            'category' => 'required ',
            'category_type' => 'required ',
            'property_type' => 'required ',
            'location' => 'required',
            'state' => 'required',
            'user' => 'required '
        ]);

        // 
        $property->title = $request->title;
        $property->address = $request->address;
        $property->description = $request->description;
        $property->image_path = $request->image_path;
        $property->price = $request->price;
        $property->bedrooms = $request->bedrooms;
        $property->category_id = $request->category;
        $property->category_type_id = $request->category_type;
        $property->property_type_id = $request->property_type;
        $property->location_id = $request->location;
        $property->state_id = $request->state;
        $property->user_id = $request->user;
        $property->save();

        return redirect('add-property')->with('success', 'Property Record Updated Successfully!');
    }
    public function deleteProperty($id)
    {
        $properties =Property::where('id', $id)->delete();
        return back()->with('success', 'Property Record Deleted Successfully!');
    }
    public function search(Request $request)
    {
    
        $title = $request->get('title');
        $properties = Property::where('title', 'like', '%' . $title . '%')->paginate(5);
        return view('AdminDashboard.property-list', compact('properties'));
        
    }
}
