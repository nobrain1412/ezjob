<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $table = "location";

    protected $fillable = [
        "name","parent_id",
    ];
    public function parent()
    {
        return $this->belongsTo(Location::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Location::class, 'parent_id');
    }
    public function company()
    {
        return $this->hasMany(Company::class, 'locationId', 'id');
    }
}
