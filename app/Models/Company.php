<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table="company";
    protected $fillable=[
        "name","locationId","email","image","website","phone","map"
    ];
    public function location()
    {
        return $this->belongsTo(Location::class,'locationId','id');
    }
    public function job()
    {
        return $this->hasMany(Job::class, 'companyId', 'id');
    }
}
