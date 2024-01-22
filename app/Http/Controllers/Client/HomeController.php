<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Company;
use App\Models\Job;
use App\Models\JobType;
use App\Models\Location;
use App\Models\Message;
use App\Models\Shift;
//use spatie\Geocoder\Geocoder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Spatie\Geocoder\Geocoder;
use GuzzleHttp\Client as GuzzleClient;

class HomeController extends Controller
{
    public function index(){
        $job = Job::with('jobType','shift','company','categories')->get();
        $location = Location::with('parent')->get();
        $jobType = JobType::all();
        $shift = Shift::all();
        $categories = Categories::all();
        $length = 11;
        $randomString = Str::random($length);
        return view("client.index",compact("job","location","jobType","shift","categories"));
    }

    public function single($id){
        $job = Job::with('jobType','shift','company','categories')->find($id);
        $googleApiKey = "AIzaSyArTLZVDH3XAP20IqiZ0mWfGYP8Plardws";
        $apiUrl = "https://www.google.com/maps/embed/v1/place?key={$googleApiKey}&q={urlencode($job->company->map)}";

        //dd($job->company->map);
        return view ("client.single",compact("job","apiUrl"));
    }


}
