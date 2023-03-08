<?php

namespace App\Http\Controllers;

use App\Models\civil_states;
use App\Models\department;
use App\Models\employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['employee'] = employee::paginate(5);
        return view('employee.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $civil_states = civil_states::all();
        $departments = department::all();

        return view('employee.create', compact( 'civil_states','departments'   ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $validated = $request->validate([
            'name_employee' => 'required',
            'surname_employee' => 'required',
            'dpi' => 'required',
            'phone_number' => 'required',
            'salary_employee' => 'required',
            'email' => 'required',
            'date_birth' => 'required',
            'cs_id' => 'required',
            'department_id' => 'required',
        ]);

        $employeeData = request()->except('_token');
        employee::insert($employeeData);
        return redirect('employee');
    }

    /**
     * Display the specified resource.
     */
    public function show(employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //

        $civil_states = civil_states::all();
        $departments = department::all();

        $employee=employee::findOrFail($id);
        return view('employee.edit', compact('employee','civil_states','departments'));

       


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //

        $validated = $request->validate([
            'name_employee' => 'required',
            'surname_employee' => 'required',
            'dpi' => 'required',
            'phone_number' => 'required',
            'salary_employee' => 'required',
            'email' => 'required',
            'date_birth' => 'required',
            'cs_id' => 'required',
            'department_id' => 'required',
        ]);

        $employeeData = request()->except(['_token','_method']);
        employee::where('id','=',$id)->update($employeeData);
        return redirect('employee');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        employee::destroy($id);
        return redirect('employee');
    }
}
