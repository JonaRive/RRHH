<?php

namespace App\Http\Controllers;


use App\Models\employee;
use App\Models\address;
use App\Models\relations;
use Illuminate\Http\Request;

class RelationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['relations']= relations::paginate(5);
        return view('relations.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employee = employee::all();
        $address = address::all();

        return view('relations.create',compact('employee','address'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'employee_id' => 'required',
            'address_id' => 'required',
            
        ]);

        $relationData = request()->except('_token');
        relations::insert($relationData);
        return redirect('relations');
    }

    /**
     * Display the specified resource.
     */
    public function show(relations $relations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $employee = employee::all();
        $address = address::all();

        $relations= relations::findOrFail();
        return view('edit.relations',compact('relations','employee','address'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'employee_id' => 'required',
            'address_id' => 'required',
            
        ]);

        $relationData = request()->except(['_token','_method']);
        relations::where('id','=',$id)->update($relationData);
        return redirect('relations');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        relations::destroy($id);
        return redirect('relations');
    
    }
}
