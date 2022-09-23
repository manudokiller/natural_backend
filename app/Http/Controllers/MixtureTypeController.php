<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\MixtureTypeResource;
use App\Models\MixtureType;

class MixtureTypeController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware('valid.mixture.type')->only('show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return MixtureTypeResource::collection(MixtureType::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new MixtureTypeResource(MixtureType::find($id));
    }
}

