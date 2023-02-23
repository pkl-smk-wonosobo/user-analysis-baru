<?php

namespace App\Http\Controllers;

use App\Http\Resources\resourcesGrupAnalyst;
use App\Models\modelGrupAnalyst;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\PaginatedResourceResponse;

class controlAnalyst extends Controller
{
    public function index(){
        $dataAnalyst = modelGrupAnalyst::all();
        // return response()->json(['data'=>$dataAnalyst]); // Menggunakan Json hanya me return hasil ORM
        return resourcesGrupAnalyst::collection($dataAnalyst); // Menggunakan API resources jadi bisa di edit pada resource
    }

    public function store(Request $request){
        $dataAnalyst = modelGrupAnalyst::create([
            'title'=>$request->title
        ]);
        return response()->json([
            'data'=>$dataAnalyst
        ]);
    }

    // public function show(modelAnalyst $dataAnalyst){
    //     return response()->json([
    //         'data'=>$dataAnalyst
    //     ]);
    // }
}