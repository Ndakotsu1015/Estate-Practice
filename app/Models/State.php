<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
    ];
/**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
       'state_id' => 'integer'
    ];

    public function properties()
    {
        return $this->hasMany(Property::class);
    }
    public function local_governments()
    {
        return $this->hasMany(LocalGovernemnt::class);
    }
}
