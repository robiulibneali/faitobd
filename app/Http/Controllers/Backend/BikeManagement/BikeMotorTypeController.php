<?php

namespace App\Http\Controllers\Backend\BikeManagement;

use App\Http\Controllers\Controller;
use App\Models\Backend\BikeManagement\BikeMotorType;
use Illuminate\Http\Request;

class BikeMotorTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.bike-management.bike-motor-type.index',[
            'bikeMotorTypes'=>BikeMotorType::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.bike-management.bike-motor-type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        BikeMotorType::saveOrUpdatebikeMotorType($request);
        return redirect()->route('admin.bike-motor-types.index')->with('success','Bike Motor Type Create Successfully');
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
        return view('backend.bike-management.bike-motor-type.create',[
            'bikeMotorType' => BikeMotorType::where('id',$id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        BikeMotorType::saveOrUpdatebikeMotorType($request,$id);
        return redirect()->route('admin.bike-motor-types.index')->with('success','Bike Motor Type Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bikeMotorType = BikeMotorType::where('id',$id)->first();
        if ($bikeMotorType)
        {
            if (file_exists($bikeMotorType->image)){
                unlink($bikeMotorType->image);
            }
            $bikeMotorType->delete();
        }
        return redirect()->route('admin.bike-motor-types.index')->with('success','bike Motor Type Delete Successfully');
    }
}
