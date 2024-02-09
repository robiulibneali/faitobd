<?php

namespace App\Http\Controllers\Backend\AdditionalFeatures;

use App\Http\Controllers\Controller;
use App\Models\Backend\AdditionalFeatures\Testimonial;
use App\Models\Backend\PartsManagement\PartsProduct;
use Illuminate\Http\Request;

class TestiomonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.additional-features.testimonials.index',[
            'testimonials' => Testimonial::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.additional-features.testimonials.form',[
            'partsProducts' => PartsProduct::where('status', 1)->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Testimonial::createOrUpdateTestimonial($request);
        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial Created Successfully');
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
        return view('backend.additional-features.testimonials.form',[
            'testimonial'   => Testimonial::find($id),
            'partsProducts'  => PartsProduct::where('status', 1)->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Testimonial::createOrUpdateTestimonial($request, $id);
        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Testimonial::deleteTestimonial($id);
        return back()->with('success', 'Testimonial Deleted Successfully');
    }
}
