<?php

namespace App\Http\Controllers\Backend\PartsManagement;

use App\Http\Controllers\Controller;
use App\Models\Backend\PartsManagement\PartsBrandCategory;
use App\Models\Backend\PartsManagement\PartsParentBrand;
use Illuminate\Http\Request;

class PartsBrandCategoryController extends Controller
{
    protected $partsBrandCategories = [];
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if (isset($request->parts_brand_category_id))
        {
            $this->partsBrandCategories = PartsBrandCategory::where('parts_brand_category_id', $request->parts_brand_category_id)->latest()->get();
        } else {
            $this->partsBrandCategories = PartsBrandCategory::where('parts_brand_category_id', 0)->latest()->get();
        }
        return view('backend.parts-management.parts-brand-category.index',[
            'partsBrandCategories'=> $this->partsBrandCategories,
            'partsParentBrands'    => PartsParentBrand::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.parts-management.parts-brand-category.create',[
            'partsParentBrands'    =>PartsParentBrand::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        PartsBrandCategory::saveOrUpdatePartsBrandCategory($request);
        return redirect()->route('admin.parts-brand-categories.index', ['parts_brand_category_id' => $request->parts_brand_category_id ?? 0])->with('success','Parts Brand Category Create Successfully');
//        return redirect()->back()->with('success','Parts Brand Category Create Successfully');
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
        return view('backend.parts-management.parts-brand-category.create',[
            'partsParentBrands'    =>PartsParentBrand::all(),
            'partsBrandCategory' => PartsBrandCategory::where('id',$id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        PartsBrandCategory::saveOrUpdatePartsBrandCategory($request,$id);
        return redirect()->route('admin.parts-brand-categories.index', ['parts_brand_category_id' => $request->parts_brand_category_id ?? 0])->with('success','Parts Brand Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $partsBrandCategory = PartsBrandCategory::where('id',$id)->first();
        if ($partsBrandCategory)
        {
            if (file_exists($partsBrandCategory->image)){
                unlink($partsBrandCategory->image);
            }
            $partsBrandCategory->delete();
        }
        return redirect()->route('admin.parts-brand-categories.index')->with('success','Parts Brand  Category Delete Successfully');
    }
}
