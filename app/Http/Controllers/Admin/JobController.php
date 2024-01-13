<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Company;
use App\Models\Job;
use App\Models\JobType;
use App\Models\Location;
use App\Models\Shift;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(){
        $data = Job::with('jobType','shift','company','categories')->get();
        return view('admin/job/index',compact ('data'));
    }

    public function create(Request $request){
        $jobType = JobType::all();
        $shift = Shift::all();
        $company = Company::all();
        $categories = Categories::all();
        if($request->isMethod('post')){
            $job = Job::create([
                'name' => $request->name,
                'desc' => $request->desc,
                'salary' => $request->salary,
                'subsidize' => $request->subsidize,
                'quantity' => $request->quantity,
                'requirement' => $request->requirement,
                'exp' => $request->exp,
                'status' => $request->status,
                'jobTypeId' =>  $request->jobTypeId,
                'categoriesId' => $request->categoriesId,
                'shiftId' => $request->shiftId,
                'companyId' => $request->companyId,
            ]);
        }
        return view ('admin/job/add',compact('jobType','shift','company','categories'));
    }
}
