<?php

namespace App\Http\Controllers;

use App\Models\civil_states;
use Illuminate\Http\Request;

class CivilStatesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['civilstates'] = civil_states::paginate(5);
        return view('civilstates.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(civil_states $civil_states)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(civil_states $civil_states)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, civil_states $civil_states)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(civil_states $civil_states)
    {
        //
    }
}
