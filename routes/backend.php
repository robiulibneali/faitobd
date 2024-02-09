<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\Dashboard\BackendController;
use App\Http\Controllers\Backend\AdditionalFeatures\SiteSettingController;
use App\Http\Controllers\Backend\AdditionalFeatures\FaqController;
use App\Http\Controllers\Backend\AdditionalFeatures\HomePageSliderController;
use App\Http\Controllers\Backend\AdditionalFeatures\TestiomonialController;
use App\Http\Controllers\Backend\AdditionalFeatures\MarketVerdorController;
use App\Http\Controllers\Backend\BlogManagement\BlogCategoryController;
use App\Http\Controllers\Backend\BlogManagement\BlogController;

use App\Http\Controllers\Backend\BikeManagement\BikeBrandController;
use App\Http\Controllers\Backend\BikeManagement\BikeEngineSizeController;
use App\Http\Controllers\Backend\BikeManagement\BikeMotorTypeController;
use App\Http\Controllers\Backend\BikeManagement\BikeYearVersionController;
use App\Http\Controllers\Backend\BikeManagement\MotorBikeController;
use App\Http\Controllers\Backend\PartsManagement\PartsBrandCategoryController;
use App\Http\Controllers\Backend\PartsManagement\PartsParentBrandController;
use App\Http\Controllers\Backend\PartsManagement\PartsProductController;
use App\Http\Controllers\Frontend\Contact\ContactController;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [BackendController::class,'index'])->name('admin.dashboard');
    Route::get('/kontact', [BackendController::class,'contact'])->name('admin.kontact');
    Route::get('/get-products-by-parent-type/{productType}', [BackendController::class,'getProductsByParentType']);

    Route::prefix('backend')->name('admin.')->group(function (){

        Route::resources([
            'site-settings'             => SiteSettingController::class,
            'faqs'                      => FaqController::class,
            'home-page-sliders'         => HomePageSliderController::class,
            'testimonials'              => TestiomonialController::class,
            'market-verdors'            => MarketVerdorController::class,
            'blog-categories'           => BlogCategoryController::class,
            'blogs'                     => BlogController::class,

            'bike-brands'               => BikeBrandController::class,
            'bike-engine-sizes'         => BikeEngineSizeController::class,
            'bike-motor-types'          => BikeMotorTypeController::class,
            'bike-year-versions'        => BikeYearVersionController::class,
            'motor-bikes'               => MotorBikeController::class,
            'parts-parent-brands'       => PartsParentBrandController::class,
            'parts-brand-categories'    => PartsBrandCategoryController::class,
            'parts-products'            => PartsProductController::class,
        ]);
    });
});
