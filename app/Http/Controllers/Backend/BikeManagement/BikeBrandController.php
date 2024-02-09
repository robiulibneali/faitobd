<?php

namespace App\Http\Controllers\Backend\BikeManagement;

use App\Http\Controllers\Controller;
use App\Models\Backend\BikeManagement\BikeBrand;
use Illuminate\Http\Request;

class BikeBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.bike-management.bike-brand.index',[
            'bikeBrands'=>BikeBrand::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.bike-management.bike-brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        BikeBrand::saveOrUpdatebikeBrand($request);
        return redirect()->route('admin.bike-brands.index')->with('success','Bike Brand Create Successfully');
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
        return view('backend.bike-management.bike-brand.create',[
            'bikeBrand' => BikeBrand::where('id',$id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        BikeBrand::saveOrUpdatebikeBrand($request,$id);
        return redirect()->route('admin.bike-brands.index')->with('success','Bike Brand Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bikeBrand = BikeBrand::where('id',$id)->first();
        if ($bikeBrand)
        {
            if (file_exists($bikeBrand->logo)){
                unlink($bikeBrand->logo);
            }
            $bikeBrand->delete();
        }
        return redirect()->route('admin.bike-brands.index')->with('success','bike Brand Delete Successfully');
    }


    }

