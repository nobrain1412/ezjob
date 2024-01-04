<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobType;
use Illuminate\Http\Request;

class JobTypeController extends Controller
{

    public function index(Request $request){

        $data = JobType::orderBy("created_at","desc")->paginate($request->per_page);
        return view("admin/job-type/index",compact("data"));
    }
}
