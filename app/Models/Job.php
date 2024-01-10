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
}
