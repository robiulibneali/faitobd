<?php

namespace App\Http\Controllers\Backend\BikeManagement;

use App\Http\Controllers\Controller;
use App\Models\Backend\BikeManagement\BikeEngineSize;
use Illuminate\Http\Request;

class BikeEngineSizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.bike-management.bike-engine-size.index',[
            'bikeEngineSizes'=>BikeEngineSize::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.bike-management.bike-engine-size.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        BikeEngineSize::saveOrUpdatebikeEngineSize($request);
        return redirect()->route('admin.bike-engine-sizes.index')->with('success','Bike Engine Size Create Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('backend.bike-management.bike-engine-size.create',[
            'bikeEngineSize' => BikeEngineSize::where('id',$id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        BikeEngineSize::saveOrUpdatebikeEngineSize($request,$id);
        return redirect()->route('admin.bike-engine-sizes.index')->with('success','Bike Engine Size Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bikeEngineSize = BikeEngineSize::where('id',$id)->first();
        
        $bikeEngineSize->delete();
        
        return redirect()->route('admin.bike-engine-sizes.index')->with('success','bike Engine Size Delete Successfully');
    }
}
