<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\HomeProductController;
use App\Http\Controllers\Frontend\Contact\ContactController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::/*prefix('{lang?}')->*/name('frontend.')->group(function (){
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    Route::resource('contacts', ContactController::class);
    Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
    Route::get('/story/faitology', [HomeController::class, 'faitology'])->name('faitology');
    Route::get('/story/faitotech', [HomeController::class, 'faitotech'])->name('faitotech');
    Route::get('/story/brembology', [HomeController::class, 'brembology'])->name('brembology');
    Route::get('/story/testimonial', [HomeController::class, 'testimonial'])->name('testimonial');

    Route::get('/story/news', [HomeController::class, 'blog'])->name('blog');
    Route::get('/story/news/detail/{blog_id}/{title?}', [HomeController::class, 'blogDetails'])->name('blog-details');

    Route::get('/change-language/{local}', function ($local){
        if (!in_array($local, ['en','bn']))
        {
            abort(400);
        }

        App::setLocale($local);
        session()->put('locale', $local);
        return redirect()->back();
    })->name('language-change');


    Route::get('/motor-brand/item/{bike_motor_type_id}/{bike_brand_name?}', [HomeProductController::class, 'bikeBrand'])->name('bike-brands');
    Route::get('/motor-brand/models/{bike_brand_id}/{brand_name?}', [HomeProductController::class, 'bike'])->name('category-wise-bikes');



    Route::get('/sub-product/detail/{sub_category_id}/{name?}', [HomeProductController::class, 'subSubCat'])->name('sub-sub-cat');
    Route::get('/product/details/{id}/{slug?}', [HomeProductController::class, 'productDetails'])->name('product-details');
    Route::get('/search', [HomeProductController::class, 'productSearch'])->name('product-search');


//    customized
    Route::get('/product/{brand_id}/{name?}', [HomeProductController::class, 'product'])->name('product');
    Route::get('/category-wise-products/{parts_parent_brand_category_id}/{name?}', [HomeProductController::class, 'subCat'])->name('sub-cat');
});





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

});
