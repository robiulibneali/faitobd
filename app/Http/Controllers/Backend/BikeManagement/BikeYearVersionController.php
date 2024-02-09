<?php

namespace App\Http\Controllers\Backend\BikeManagement;

use App\Http\Controllers\Controller;
use App\Models\Backend\BikeManagement\BikeYearVersion;
use Illuminate\Http\Request;

class BikeYearVersionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.bike-management.bike-year-version.index',[
            'bikeYearVersions'=>BikeYearVersion::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.bike-management.bike-year-version.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        BikeYearVersion::saveOrUpdatebikeYearVersion($request);
        return redirect()->route('admin.bike-year-versions.index')->with('success','Bike year Version Create Successfully');
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
        return view('backend.bike-management.bike-year-version.create',[
            'bikeYearVersion' => BikeYearVersion::where('id',$id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        BikeYearVersion::saveOrUpdatebikeYearVersion($request,$id);
        return redirect()->route('admin.bike-year-versions.index')->with('success','Bike year Version Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bikeYearVersion = BikeYearVersion::where('id',$id)->first();
        
            $bikeYearVersion->delete();
        
        return redirect()->route('admin.bike-year-versions.index')->with('success','bike Year Version Delete Successfully');
    }
}
