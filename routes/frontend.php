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

Route::name('frontend.')->group(function (){
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
//    Route::post('/kontacts', [ContactController::class, 'send'])->name('contact.send');
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

    Route::get('/product/{brand_id}/{name?}', [HomeProductController::class, 'product'])->name('product');
    Route::get('/product/detail/subCat', [HomeProductController::class, 'subCat'])->name('sub-cat');
    Route::get('/product/detail/subSubCat', [HomeProductController::class, 'subSubCat'])->name('sub-sub-cat');
    Route::get('/product/detail/{id}/{slug?}', [HomeProductController::class, 'productDetails'])->name('product-details');
    Route::get('/search/productSearch', [HomeProductController::class, 'productSearch'])->name('product-search');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

});
