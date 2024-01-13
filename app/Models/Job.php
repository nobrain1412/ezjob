<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $table = "job";

    protected $fillable = [
        "name", "desc", "salary", "subsidize", "quantity", "requirement", "exp", 'status', "jobTypeId", "categoriesId", "shiftId", "companyId",
    ];
    public function jobType()
    {
        return $this->belongsTo(JobType::class,'jobTypeId','id');
    }
    public function categories()
    {
        return $this->belongsTo(Categories::class,'categoriesId','id');
    }
    public function shift()
    {
        return $this->belongsTo(Shift::class,'shiftId','id');
    }
    public function company()
    {
        return $this->belongsTo(Company::class,'companyId','id');
    }
}
