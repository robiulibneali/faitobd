<?php

namespace App\Http\Controllers\Backend\PartsManagement;

use App\Http\Controllers\Controller;
use App\Models\Backend\AdditionalFeatures\MarketVerdor;
use App\Models\Backend\BikeManagement\MotorBike;
use App\Models\Backend\PartsManagement\PartsBrandCategory;
use App\Models\Backend\PartsManagement\PartsProduct;
use Illuminate\Http\Request;

class PartsProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.parts-management.parts-product.index',[

            'partsProducts'       => PartsProduct::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.parts-management.parts-product.create',[
            'partsBrandCategories'=> PartsBrandCategory::where('parts_brand_category_id', 0)->get(['id', 'parts_brand_category_id', 'name']),
            'motorbikes'    => MotorBike::where(['status' => 1])->get(['id', 'model_name']),
            'marketplaceVendors'    => MarketVerdor::where('status', 1)->get(['id', 'name', 'logo']),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        return $request;
        $partsProduct   = PartsProduct::saveOrUpdatePartsProduct($request);
        foreach ($request->marketplace_vendor as $key => $marketplace_id)
        {
            $partsProduct->marketVerdors()->attach($marketplace_id['ids'], ['link' => $marketplace_id['links']]);
        }
        $partsProduct->motorBikes()->attach($request->motorbike_ids);
        return redirect()->route('admin.parts-products.index')->with('success','Parts Product Create Successfully');
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
        return view('backend.parts-management.parts-product.create',[
            'partsBrandCategories'=> PartsBrandCategory::where('parts_brand_category_id', 0)->get(['id', 'parts_brand_category_id', 'name']),
            'partsProduct' => PartsProduct::where('id',$id)->first(),
            'motorbikes'    => MotorBike::where(['status' => 1])->get(['id', 'model_name']),
            'marketplaceVendors'    => MarketVerdor::where('status', 1)->get(['id', 'name', 'logo']),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
//        return $request;
        $partsProduct   = PartsProduct::saveOrUpdatePartsProduct($request,$id , PartsProduct::find($id));
        if (!empty($request->marketplace_vendor))
        {
            $partsProduct->marketVerdors()->detach();
            foreach ($request->marketplace_vendor as $key => $marketplace_id)
            {
                $partsProduct->marketVerdors()->attach($marketplace_id['ids'], ['link' => $marketplace_id['links']]);
            }
        }
        if (!empty($request->motorbike_ids))
        {
            $partsProduct->motorBikes()->detach();
            $partsProduct->motorBikes()->attach($request->motorbike_ids);
        }
        return redirect()->route('admin.parts-products.index')->with('success','Parts Product Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $partsProduct = PartsProduct::where('id',$id)->first();
        if ($partsProduct)
        {
            if (file_exists($partsProduct->main_image)){
                unlink($partsProduct->main_image);
            }

            if (!empty($partsProduct->sub_images))
            {
                foreach(json_decode($partsProduct->sub_images) as $file){
                    unlink($file);
                }
            }
            $partsProduct->marketVerdors()->detach();
            $partsProduct->motorBikes()->detach();
            $partsProduct->delete();
        }
        return redirect()->route('admin.parts-products.index')->with('success','Parts Product Delete Successfully');
    }
}
