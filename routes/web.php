<?php

use Illuminate\Support\Facades\Route;

//frontend
use App\Http\Controllers\frontend\PageController;


//backend
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\ContentController;
use App\Http\Controllers\backend\ImageController;



/*
|--------------------------------------------------------------------------
| frontend Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//homepage route:
Route::get('/', [PageController::class, 'index'])->name('homepage');

//Static Pages
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/product', [PageController::class, 'product'])->name('product');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
// single product page
Route::group(['prefix'=>'/product'], function(){
    Route::get('/bottombag', [PageController::class, 'bottombag'])->name('product.bottombag');
    Route::get('/bottomgolfbag', [PageController::class, 'bottomgolfbag'])->name('product.bottomgolfbag');
    Route::get('/foldbag', [PageController::class, 'foldbag'])->name('product.foldbag');
    Route::get('/partspag', [PageController::class, 'partspag'])->name('product.partspag');
    Route::get('/pettoliumGass', [PageController::class, 'pettoliumGass'])->name('product.pettoliumGass');
    Route::get('/polytubing', [PageController::class, 'polytubing'])->name('product.polytubing');
    Route::get('/sidebag', [PageController::class, 'sidebag'])->name('product.sidebag');
    Route::get('/sidegolgbag', [PageController::class, 'sidegolgbag'])->name('product.sidegolgbag');
    Route::get('/wickettledbag', [PageController::class, 'wickettledbag'])->name('product.wickettledbag');
    
    
});
// Route::get('/', function () {
//     return view('welcome');
// });

/*
|--------------------------------------------------------------------------
| backend Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix'=>'admin'], function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('admin.dashboard');

    // product group
    Route::group(['prefix'=>'/content'], function(){
        Route::get('/manage', [ContentController::class, 'index'])->name('content.manage');
        Route::get('/create', [ContentController::class, 'create'])->name('content.create');
        Route::POST('/store', [ContentController::class, 'store'])->name('content.store');
        Route::get('/edit/{id}', [ContentController::class, 'edit'])->name('content.edit');
        Route::POST('/update/{id}', [ContentController::class, 'update'])->name('content.update');
        Route::POST('/destroy/{id}', [ContentController::class, 'destroy'])->name('content.destroy');
        
        
    });
    Route::group(['prefix'=>'/image'], function(){
        Route::get('/manage', [ImageController::class, 'index'])->name('image.manage');
        Route::get('/create', [ImageController::class, 'create'])->name('image.create');
        Route::POST('/store', [ImageController::class, 'store'])->name('image.store');
        Route::get('/edit/{id}', [ImageController::class, 'edit'])->name('image.edit');
        Route::POST('/update/{id}', [ImageController::class, 'update'])->name('image.update');
        Route::POST('/destroy/{id}', [ImageController::class, 'destroy'])->name('image.destroy');
        
        
    });
});

require __DIR__.'/auth.php';
