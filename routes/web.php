<?php

use Illuminate\Support\Facades\Route;


// auth
Route::get('/', function () {
    return view('login');
});


// admin
Route::get('/admin/dashboard', function () {
    return view(
        'admin.dashboard',
        [
            "title" => "Dashboard",
            "income" => "20.000.000",
            "spending" => "5.000.000",
            "margin" => "15.000.000",
        ]
    );
});
Route::get('/admin/transactions', function () {
    return view('admin.transactions', ["title" => "Transaksi"]);
});
Route::get('/admin/products', function () {
    return view('admin.products', ["title" => "Produk"]);
});
Route::get('/admin/categories', function () {
    return view('admin.categories', ["title" => "Kategori"]);
});
Route::get('/admin/stocks', function () {
    return view('admin.stocks', ["title" => "Atur Stok"]);
});
Route::get('/admin/employees', function () {
    return view('admin.employees', ["title" => "Karyawan"]);
});
Route::get('/admin/income', function () {
    return view('admin.income', ["title" => "Pemasukan"]);
});
Route::get('/admin/spending', function () {
    return view('admin.spending', ["title" => "Pengeluaran"]);
});
Route::get('/admin/logs', function () {
    return view('admin.logs', ["title" => "Logs"]);
});



// user / employees
Route::get('/user/cashier', function () {
    return view('user.cashier', ["title" => "Kasir"]);
});
