<?php

namespace App\Http\Controllers\Backend\PartsManagement;

use App\Http\Controllers\Controller;
use App\Models\Backend\PartsManagement\PartsParentBrand;
use Illuminate\Http\Request;

class PartsParentBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.parts-management.parts-parent-brand.index',[
            'partsParentBrands'=>PartsParentBrand::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.parts-management.parts-parent-brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        PartsParentBrand::saveOrUpdatePartsParentBrand($request);
        return redirect()->route('admin.parts-parent-brands.index')->with('success','Parts Parent Brand Create Successfully');
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
        return view('backend.parts-management.parts-parent-brand.create',[
            'partsParentBrand' => PartsParentBrand::where('id',$id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        PartsParentBrand::saveOrUpdatePartsParentBrand($request,$id);
        return redirect()->route('admin.parts-parent-brands.index')->with('success','Parts Parent Brand Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $partsParentBrand = PartsParentBrand::where('id',$id)->first();
        if ($partsParentBrand)
        {
            if (file_exists($partsParentBrand->logo)){
                unlink($partsParentBrand->logo);
            }
            $partsParentBrand->delete();
        }
        return redirect()->route('admin.parts-parent-brands.index')->with('success','Parts Parent Brand Delete Successfully');
    }
}
