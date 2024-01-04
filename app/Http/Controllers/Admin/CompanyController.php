<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(request $request){
        $data = Company::orderBy("id","desc")->paginate($request->per_page);
        return view("admin/company/index", compact( "data"));
    }
    public function create(Request $request){
        return view("admin/company/add");
    }
}
