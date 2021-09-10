<?php

namespace App\Http\Controllers;

use App\Models\Flat;
use Illuminate\Http\Request;

class FlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Flat::latest()->paginate(5);
        
    
        return view('flats.flatsexpenses',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('flats.addfloor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'flat_no' => 'required',
            'floor_no' => 'required',
            'building_material' => 'required',
            'from' => 'required',
            'unit_no' => 'required',
            'total_expenses' => 'required'
        ]);
        Flat::create($request->all());
     
        return redirect()->route('flats.index')
                        ->with('success','Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Flat  $flat
     * @return \Illuminate\Http\Response
     */
    public function show(Flat $flat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Flat  $flat
     * @return \Illuminate\Http\Response
     */
    public function edit(Flat $flat)
    {
        return view('flats.editflatexpenses',compact('flat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Flat  $flat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flat $flat)
    {
        $request->validate([
            'id' => 'required',
            'flat_no' => 'required',
            'floor_no' => 'required',
            'unit_no' => 'required',
            'building_material' => 'required',
            'from' => 'required',
            'total_expenses' => 'required'
        ]);
    
        $flat->update($request->all());
    
        return redirect()->route('flats.index')
                        ->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Flat  $flat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flat $flat)
    {
        $flat->delete();
    
        return redirect()->route('flats.index')
                        ->with('success','Post deleted successfully');
    }
}
