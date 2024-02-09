<?php

namespace App\Http\Controllers\Backend\AdditionalFeatures;

use App\Http\Controllers\Controller;
use App\Models\Backend\AdditionalFeatures\MarketVerdor;
use Illuminate\Http\Request;

class MarketVerdorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.additional-features.market-verdors.index',[
            'marketVerdors' => MarketVerdor::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.additional-features.market-verdors.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        MarketVerdor::createOrUpdateMarketVerdor($request);
        return redirect()->route('admin.market-verdors.index')->with('success', 'Market Vendor Created Successfully');
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
        return view('backend.additional-features.market-verdors.form',[
            'marketVerdor' => MarketVerdor::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        MarketVerdor::createOrUpdateMarketVerdor($request, $id);
        return redirect()->route('admin.market-verdors.index')->with('success', 'Market Vendor Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        MarketVerdor::deleteMarketVerdor($id);
        return back()->with('success', 'Market Vendor Deleted Successfully');
    }
}
