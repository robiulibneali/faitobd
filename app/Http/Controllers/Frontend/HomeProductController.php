<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\PartsManagement\PartsBrandCategory;
use App\Models\Backend\PartsManagement\PartsParentBrand;
use App\Models\Backend\PartsManagement\PartsProduct;

class HomeProductController extends Controller
{
    protected $product, $relatedProducts = [];
    public function product($brandId)
    {
        return view('frontend.product.index', [
            'brand'     => PartsParentBrand::select('id', 'name', 'description')->find($brandId),
            'categories'  => PartsBrandCategory::where([
                'parts_parent_brand_id' => $brandId,
                'status'                => 1,
            ])->select('id', 'parts_parent_brand_id', 'name', 'image')->get(),
        ]);
    }

    public function subCat()
    {
        return view('frontend.product.sub-cat');
    }

    public function subSubCat()
    {
        return view('frontend.product.sub-sub-cat', [
            'is_nobanner' => 1,
        ]);
    }

    public function productDetails($productId, $slug = null)
    {
        $this->product          = PartsProduct::find($productId);
        $this->relatedProducts  = PartsProduct::where(['parts_brand_category_id' => $this->product->parts_brand_category_id, 'status' => 1])->take(4)->get(['id', 'parts_brand_category_id', 'title', 'main_image']);
        return view('frontend.product.product-details', [
            'is_nobanner'       => 1,
            'product'           => $this->product,
            'relatedProducts'   => $this->relatedProducts
        ]);
    }


    public function productSearch()
    {
        return view('frontend.product.product-search', [
            'is_nobanner' => 1,
        ]);
    }


}
