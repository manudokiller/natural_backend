<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\DiseaseResource;
use App\Models\Disease;

class DiseaseController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware('valid.disease')->only('show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return DiseaseResource::collection(Disease::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new DiseaseResource(Disease::find($id));
    }
}
