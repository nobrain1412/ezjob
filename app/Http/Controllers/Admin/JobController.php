<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\Location;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(){
        return view('admin/job/index');
    }

    public function create(Request $request){
        $location = Location::all();
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
        return view ('admin/job/add',compact('location'));
    }
}
