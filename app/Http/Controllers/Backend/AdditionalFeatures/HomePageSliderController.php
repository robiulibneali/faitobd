<?php

namespace App\Http\Controllers\Backend\AdditionalFeatures;

use App\Http\Controllers\Controller;
use App\Models\Backend\AdditionalFeatures\HomePageSlider;
use Illuminate\Http\Request;

class HomePageSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.additional-features.home-page-sliders.index',[
            'homePageSliders' => HomePageSlider::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.additional-features.home-page-sliders.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        HomePageSlider::createOrUpdateHomePageSlider($request);
        return redirect()->route('admin.home-page-sliders.index')->with('success', 'Home Page Slider Created Successfully');
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
        return view('backend.additional-features.home-page-sliders.form',[
            'homePageSlider' => HomePageSlider::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        HomePageSlider::createOrUpdateHomePageSlider($request, $id);
        return redirect()->route('admin.home-page-sliders.index')->with('success', 'Home Page Slider Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        HomePageSlider::deleteHomePageSlider($id);
        return back()->with('success', 'Home Page Slider Deleted Successfully');
    }
}
