<?php

namespace App\Http\Controllers;

use App\Models\Covid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CovidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $covids = Covid::all();
        return response()->json($covids);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Covid $covid)
    {
        //
        return response()->json($covid);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        //
        $response = Http::get('https://hpb.health.gov.lk/api/get-current-statistical');
        $CovidDatas=json_decode($response->body());

        foreach ($CovidDatas as $data)
        $CovidData=new Covid();
        $CovidData->local_new_cases=$data->local_new_cases;
        $CovidData->local_total_cases=$data->local_total_cases;
        $CovidData->local_new_deaths=$data->local_new_deaths;
        $CovidData->local_active_cases=$data->local_active_cases;
        $CovidData->global_new_cases=$data->global_new_cases;
        $CovidData->global_total_cases=$data->global_total_cases;
        
        $CovidData->save();
        return response()->json($CovidData);

        return "data send";
       
    }

    

    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Covid $covid)
    {
        //
    }

    
}
