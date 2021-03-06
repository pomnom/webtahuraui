<?php

namespace App\Http\Controllers;

use App\Models\FloraM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FloraMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $floras = Http::get(("https://flora-service-nuraksa.herokuapp.com/flora"));
        $dataFLoras = $floras->json();
        return view('/flora.index',['dataFloras'=>$dataFLoras, 'judul'=>"Flora"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FloraM  $floraM
     * @return \Illuminate\Http\Response
     */
    public function show(FloraM $slug)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FloraM  $floraM
     * @return \Illuminate\Http\Response
     */
    public function edit(FloraM $floraM)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FloraM  $floraM
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FloraM $floraM)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FloraM  $floraM
     * @return \Illuminate\Http\Response
     */
    public function destroy(FloraM $floraM)
    {
        //
    }
}
