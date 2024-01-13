<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Shift;
use Illuminate\Http\Request;

class ShiftController extends Controller
{
    public function index(){
        $data = Shift::all();
        return view("admin/shift/index",compact("data"));
    }
}
