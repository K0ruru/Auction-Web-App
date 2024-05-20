<?php

use Illuminate\Support\Facades\Route;

// route group for petugas
Route::prefix('/officer')->group(function () {

    // route for dashboard petugas
    Route::get('/officer-dashboard', function () {
        return view('page.dashboardPetugas');
    });

    // route add product for petugas
    Route::get('/officer-product', function () {
        return view('CRUD-PAGE.addProduct');
    });
});

// route group for admin
Route::prefix('/admin')->group(function () {
    Route::get('/admin-dashboard', function () {
        return view('page.DashboardAdmin');
    })->name('admin/admin-dashboard');

    // route add product for admin
    Route::get('/admin-product', function () {
        return view('CRUD-PAGE.addProduct');
    });
});

// route login gruop
Route::prefix('/login-register')->group(function () {

    // route for regsiter masyarakat
    Route::get('/sign-up', function () {
        return view('signUp');
    });

    // route login for admin or petugas
    Route::get('/login', function () {
        return view('page-login-admin-petugas.login');
    });
   
    Route::get('/sign-up-officer', function () {
        return view('page-login-admin-petugas.register');
    });
});

// route for home website
Route::get('/home', function () {
    return view('page.Home');
})->name('home');

// route login for masyakarat
    Route::get('/', function () {
        return view('welcome');
});
