<?php

namespace App\Http\Controllers\Backend\AdditionalFeatures;

use App\Http\Controllers\Controller;
use App\Models\Backend\AdditionalFeatures\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.additional-features.faqs.index',[
            'faqs' => Faq::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.additional-features.faqs.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Faq::createOrUpdateFaq($request);
        return redirect()->route('admin.faqs.index')->with('success', 'Faq Created Successfully');
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
        return view('backend.additional-features.faqs.form',[
            'faq' => Faq::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Faq::createOrUpdateFaq($request, $id);
        return redirect()->route('admin.faqs.index')->with('success', 'Faq Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Faq::deleteFaq($id);
        return back()->with('success', 'Faq Deleted Successfully');
    }
}
