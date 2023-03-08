<?php

namespace App\Http\Controllers;

use App\Models\address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['address'] = address::paginate(5);
        return view('address.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('address.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'country' => 'required',
            'city' => 'required',
            'state' => 'required',
      
        ]);

        $adddressData = request()->except('_token');
        address::insert($adddressData);
        return redirect('address');
    }

    /**
     * Display the specified resource.
     */
    public function show(address $address)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $address=address::findOrFail($id);
        return view('address.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'country' => 'required',
            'city' => 'required',
            'state' => 'required',
      
        ]);

        $adddressData= request()->except('_token','_method');
        address::where('id','=',$id)->update($adddressData);
        return redirect('address');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        address::destroy($id);
        return redirect('adddress');
    }
}
