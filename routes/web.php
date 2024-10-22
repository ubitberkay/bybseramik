<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/bybcms', function () {
    return redirect('login');
})->name("index");

Route::get('/', [FrontController::class, 'home'])->name('home');
Route::get('/seramik', [FrontController::class, 'seramikler'])->name('seramikler');
Route::get('/seramik/{id}', [FrontController::class, 'seramik'])->name('seramik');
Route::get('/teknik-granit', [FrontController::class, 'granitler'])->name('granitler');
Route::get('/teknik-granit/{slug}', [FrontController::class, 'granit'])->name('granit');
Route::get('/hakkimizda', [FrontController::class, 'about'])->name('about');
Route::get('/iletisim', [FrontController::class, 'contact'])->name('contact');
Route::post('/iletisim', [FrontController::class, 'contact_submit'])->name('contact_submit');

Route::prefix('/dashboard')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');
    Route::middleware(['auth'])->group(function () {
        Route::name('genelbilgiler.')->group(function () {
            Route::get('/genelbilgiler/{genelBilgiler}', [AdminController::class, 'genel_bilgiler_edit'])->name('edit');
            Route::post('/genelbilgiler/{genelBilgiler}', [AdminController::class, 'genel_bilgiler_update'])->name('update');
        });
        Route::name('sliders.')->group(function () {
            Route::get('/sliders', [AdminController::class, 'slider_index'])->name('index');
            Route::get('/sliders/create', [AdminController::class, 'slider_create'])->name('create');
            Route::post('/sliders/create', [AdminController::class, 'slider_store'])->name('store');
            Route::get('/sliders/{sliders}', [AdminController::class, 'slider_edit'])->name('edit');
            Route::post('/sliders/{sliders}', [AdminController::class, 'slider_update'])->name('update');
            Route::post('/sliders/delete/{sliders}', [AdminController::class, 'slider_destroy'])->name('destroy');
        });
        Route::name('urun.')->group(function () {
            Route::get('/urun', [AdminController::class, 'urun_index'])->name('index');
            Route::get('/urun/create', [AdminController::class, 'urun_create'])->name('create');
            Route::post('/urun/create', [AdminController::class, 'urun_store'])->name('store');
            Route::get('/urun/{urun}', [AdminController::class, 'urun_edit'])->name('edit');
            Route::post('/urun/{urun}', [AdminController::class, 'urun_update'])->name('update');
            Route::post('/urun/delete/{urun}', [AdminController::class, 'urun_destroy'])->name('destroy');
        });
        Route::name('protiles.')->group(function () {
            Route::get('/protiles', [AdminController::class, 'protiles_index'])->name('index');
            Route::get('/protiles/create', [AdminController::class, 'protiles_create'])->name('create');
            Route::post('/protiles/create', [AdminController::class, 'protiles_store'])->name('store');
            Route::get('/protiles/{protilesUrun}', [AdminController::class, 'protiles_edit'])->name('edit');
            Route::post('/protiles/{protilesUrun}', [AdminController::class, 'protiles_update'])->name('update');
            Route::post('/protiles/delete/{protilesUrun}', [AdminController::class, 'protiles_destroy'])->name('destroy');
        });
        Route::name('boyut.')->group(function () {
            Route::get('/boyut', [AdminController::class, 'boyut_index'])->name('index');
            Route::get('/boyut/create', [AdminController::class, 'boyut_create'])->name('create');
            Route::post('/boyut/create', [AdminController::class, 'boyut_store'])->name('store');
            Route::get('/boyut/{boyut}', [AdminController::class, 'boyut_edit'])->name('edit');
            Route::post('/boyut/{boyut}', [AdminController::class, 'boyut_update'])->name('update');
            Route::post('/boyut/delete/{boyut}', [AdminController::class, 'boyut_destroy'])->name('destroy');
        });
        Route::name('type.')->group(function () {
            Route::get('/type', [AdminController::class, 'type_index'])->name('index');
            Route::get('/type/create', [AdminController::class, 'type_create'])->name('create');
            Route::post('/type/create', [AdminController::class, 'type_store'])->name('store');
            Route::get('/type/{type}', [AdminController::class, 'type_edit'])->name('edit');
            Route::post('/type/{type}', [AdminController::class, 'type_update'])->name('update');
            Route::post('/type/delete/{type}', [AdminController::class, 'type_destroy'])->name('destroy');
        });
        Route::name('iletisim_info.')->group(function () {
            Route::get('/iletisim_info/{iletisim_info}', [AdminController::class, 'iletisim_info_edit'])->name('edit');
            Route::post('/iletisim_info/{iletisim_info}', [AdminController::class, 'iletisim_info_update'])->name('update');
        });
        Route::name('messages.')->group(function () {
            Route::get('/mesajlar', [AdminController::class, 'message_index'])->name('index');
        });
    });
});

require __DIR__ . '/auth.php';
