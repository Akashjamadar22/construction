<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Owner::latest()->paginate(5);
        
    
        return view('flats.owner',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('flats.addowner');
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
            'total_cost' => 'required',
            'paid_amount' => 'required',
            'pending_amount' => 'required',
            'email' => 'required',
            'phone_no' => 'required',
            'name' => 'required'
        ]);
        Owner::create($request->all());
     
        return redirect()->route('owner.index')
                        ->with('success','Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function show(Owner $owner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function edit(Owner $owner)
    {
        return view('flats.editowner',compact('owner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Owner $owner)
    {
        // dd($request->all());
        $request->validate([
            'id' => 'required',
            'flat_no' => 'required',
            'floor_no' => 'required',
            'total_cost' => 'required',
            'paid_amount' => 'required',
            'pending_amount' => 'required',
            'email' => 'required',
            'phone_no' => 'required',
            'name' => 'required'
        ]);
    
        $crud = Owner::find();  
        $crud->flat_no =  $request->get('flat_no');  
        $crud->floor_no = $request->get('floor_no');  
        $crud->total_cost = $request->get('total_cost');  
        $crud->paid_amount = $request->get('paid_amount');  
        $crud->pending_amount =  $request->get('pending_amount');  
        $crud->email = $request->get('email');  
        $crud->phone_no = $request->get('phone_no');  
        $crud->name = $request->get('name');
        
        $crud->save();
    
        return redirect()->route('owner.index')
                        ->with('success','Post created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Owner $owner)
    {
        $owner->delete();
    
        return redirect()->route('owner.index')
                        ->with('success','Post deleted successfully');
    }
}
