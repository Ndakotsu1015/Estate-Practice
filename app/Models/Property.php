<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'image_path',
        'description',
        'address',
        'price',
        'approved',
        'bedrooms',
        'category_id',
        'category_type_id',
        'property_type_id',
        'location_id',
        'state_id',
        'user_id'
    ];
     /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'approved' => 'boolean',
        'category_id' => 'integer',
        'category_type_id' => 'integer',
        'location_id' => 'integer',
        'user_id' => 'integer',
        'state_id' => 'integer',
        'property_type_id' => 'integer',
        'price' => 'float',
    ];
    //Get the user table associated with the properties table
    public function user() {
        return $this->belongsTo(User::class);
    }
    //Get the Category table associated with the properties table
    public function category() {
        return $this->belongsTo(Category::class);
    }
    //Get the location table associated with the properties table
    public function location() {
        return $this->belongsTo(Location::class);
    }
    
    //Get the state table associated with the properties table
    public function state()
    {
        return $this->belongsTo(State::class);
    }


    //Get the PropertyType table associated with the properties table
    public function propertyType()
    {
        return $this->belongsTo(PropertyType::class);
    }

    public function categoryType()
    {
        return $this->belongsTo(CategoryType::class);
    }
   
}
