<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\MixtureResource;
use App\Models\Mixture;

class MixtureController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware('valid.mixture')->only('show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return MixtureResource::collection(Mixture::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new MixtureResource(Mixture::find($id));
    }
}

