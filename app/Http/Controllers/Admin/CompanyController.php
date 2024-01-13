<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Yoeunes\Toastr\Facades\Toastr;

class CompanyController extends Controller
{
    public function index(request $request){
        $data = Company::with('location')->get();
        //dd($data);
        return view("admin/company/index", compact( "data"));
    }
    public function create(Request $request){
        $location = Location::all();
        if($request->method() == "POST"){
            //dd($request->all());
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $image = $request->file('image');
                $imageName =str::slug($request->name). '-' .Carbon::now()->timestamp . '.' . $image->getClientOriginalExtension();
                $image->storeAs('images', $imageName,'public');
            } else {
                $imageName = null;
            }
            $company = Company::create([
                'name' => $request->name,
                'email' => $request->email,
                'locationId' => $request->locationId,
                'image' => $imageName,
                'map' => $request->map,
                'phone' => $request->phone,
                'website'=> $request->website,
            ]);
            return redirect()->route('company');
        }
        return view("admin/company/add",compact("location"));
    }
    public function delete($id){
        if($id){
            $deleted = Company::destroy($id);
        }
        if ($deleted) {
            Toastr()->success('delete successfuly ', 'success');
        } else {
            Toastr()->error('smt wrong ', 'error');
        }
        return redirect()->route("company");
    }

    public function edit(Request $request,$id){
        $company = Company::find($id);
        if($request->method() == "POST"){
            $company = Company::find($id);
            $params = $request->except('_token','image');
            if($request->hasFile('image') && $request->file('image')->isValid()){
                Storage::delete('/public/'. $company->image);
                $request->image = $request->file('image');
                $imageName =str::slug($request->name). '-' .Carbon::now()->timestamp . '.' . $request->image->getClientOriginalExtension();
                $request->image->storeAs('images', $imageName,'public');
                $params['image'] = $imageName;
            }else{
                $request->image = $company->image;
            }
            DB::beginTransaction();
            $company->update($params);
            DB::commit();
            return redirect()->route('company');
        }
        return view('admin/company/edit',compact('company'));
    }
}
