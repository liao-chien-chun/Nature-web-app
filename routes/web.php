<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});


// 管理後台
Route::prefix('admin')->group(function() {
    // 商品相關
    Route::prefix('product')->group(function() {
        // 所有商品頁面
        Route::get('/', [ProductController::class, 'index'])->name('index');
        // 新增商品頁面
        Route::get('/create', [ProductController::class, 'create'])->name('create');
        // 新增商品
        Route::post('/create', [ProductController::class, 'store'])->name('store');

        Route::prefix('{product}')->group(function() {
             // 編輯商品頁面
            Route::get('/edit', [ProductController::class, 'edit'])->name('edit');
            // 送出編輯商品
            Route::post('/edit', [ProductController::class, 'update'])->name('update');
            // 刪除商品
            Route::post('/delete', [ProductController::class, 'destroy'])->name('destroy');
            // 上架商品
            Route::post('/on-shelf', [ProductController::class, 'onShelf'])->name('on-shelf');
            // 下架商品
            Route::post('/off-shelf', [ProductController::class, 'offShelf'])->name('off-shelf');
        });
    });


    // 儲存當日營業額頁面
    // 儲存送出當日營業額
    // 業績頁面

});
