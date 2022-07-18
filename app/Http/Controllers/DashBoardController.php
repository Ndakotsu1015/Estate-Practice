<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryType;
use App\Models\Location;
use App\Models\Property;
use App\Models\PropertyType;
use App\Models\State;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    //
    public function create()
    {
        return view('AdminDashboard.Dash-board');
    }

    public function edit(Request $request)
    {
        $property =Property::where('id', $request->id)->first();
        $states = State::all();
        $locations =Location::all();
        $categories = Category::all();
        $categoryTypes = CategoryType::all();
        $propertyTypes = PropertyType::all();
        return view('AdminDashboard.Dash-board2', compact('property', 'categories', 'categoryTypes', 'propertyTypes', 'locations', 'states'));
    }

}
