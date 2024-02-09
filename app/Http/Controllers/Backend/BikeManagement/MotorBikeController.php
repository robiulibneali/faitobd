<?php

namespace App\Http\Controllers\Backend\BikeManagement;

use App\Http\Controllers\Controller;
use App\Models\Backend\BikeManagement\BikeBrand;
use App\Models\Backend\BikeManagement\BikeEngineSize;
use App\Models\Backend\BikeManagement\BikeMotorType;
use App\Models\Backend\BikeManagement\BikeYearVersion;
use App\Models\Backend\BikeManagement\MotorBike;
use Illuminate\Http\Request;

class MotorBikeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.bike-management.motor-bike.index',[
            'motorBikes'       =>MotorBike::all(),
            'bikeBrands'       =>BikeBrand::all(),
            'bikeEngineSizes'  =>BikeEngineSize::all(),
            'bikeMotorTypes'   =>BikeMotorType::all(),
            'bikeYearVersions' =>BikeYearVersion::all(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.bike-management.motor-bike.create',[
            'bikeBrands'       =>BikeBrand::all(),
            'bikeEngineSizes'  =>BikeEngineSize::all(),
            'bikeMotorTypes'   =>BikeMotorType::all(),
            'bikeYearVersions' =>BikeYearVersion::all(),

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        MotorBike::saveOrUpdateMotorBike($request);
        return redirect()->route('admin.motor-bikes.index')->with('success','Motor Bike Create Successfully');
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
        return view('backend.bike-management.motor-bike.create',[
            'bikeBrands'       =>BikeBrand::all(),
            'bikeEngineSizes'  =>BikeEngineSize::all(),
            'bikeMotorTypes'   =>BikeMotorType::all(),
            'bikeYearVersions' =>BikeYearVersion::all(),
            'motorBike'        =>MotorBike::where('id',$id)->first(),

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        MotorBike::saveOrUpdateMotorBike($request,$id);
        return redirect()->route('admin.motor-bikes.index')->with('success','Motor Bike Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $motorBike = MotorBike::where('id',$id)->delete();

        return redirect()->route('admin.motor-bikes.index')->with('success','Motor Bike Delete Successfully');
    }
}
