<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobType extends Model
{
    use HasFactory;

    protected $table = "job_type";
    protected $fillable = [
        "name"
    ];
    public function job()
    {
        return $this->hasMany(Job::class, 'jobTypeId', 'id');
    }
}
