<?php

namespace App\Http\Controllers;

use App\Models\process;
use App\Models\employee;
use App\Models\status;
use Illuminate\Http\Request;

class ProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['process']=process::paginate(5);
        return view('process.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $employee = employee::all();
        $status = status::all();


        return view('process.create', compact('employee','status'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'deadline' => 'required',
            'comments' => 'required',
            'employee_id' => 'required',
            'status_id' => 'required',
        ]);

        $processData = request()->except('_token');
        process::insert($processData);
        return redirect('process');
    }

    /**
     * Display the specified resource.
     */
    public function show(process $process)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $employee = employee::all();
        $status = status::all();

        $process = process::findOrFail($id);
        return view('process.edit', compact('process','employee','status'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $validated = $request->validate([
            'deadline' => 'required',
            'comments' => 'required',
            'employee_id' => 'required',
            'status_id' => 'required',
        ]);

        $processData = request()->except('_token','_method');
        process::where('id','=',$id)->update($processData);
        return redirect('process');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        process::destroy($id);
        return redirect('process');
    }
}
