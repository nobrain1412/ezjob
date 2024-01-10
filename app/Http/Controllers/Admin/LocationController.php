<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index(){
        $data = Location::with('parent')->get();
        return view('admin.location.index',compact('data'));
    }

    public function create(Request $request){
        $location = Location::all();
        if($request -> isMethod('post')){
            $request->validate([
                'name' => 'required|unique:location|max:255',
                'parent_id' => 'nullable|exists:location,id',
            ]);
            //dd($request->all());
            Location::create([
                'name'=> $request->name,
                'parent_id'=> $request->parent_id,
            ]);

            return redirect()->route('location');
        }
        return view ('admin.location.add',compact('location'));
    }

    public function delete($id){
        Location::findOrFail($id)->delete();
        return redirect()->route('location');
    }
}
