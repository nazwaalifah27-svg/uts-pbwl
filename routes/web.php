<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('halaman');
})->name('halaman');

Route::get('/produk', function () {
    $products = [
        ['kode' => 'BRG001', 'nama' => 'Pena', 'jenis' => 'Alat tulis', 'harga' => 20000],
        ['kode' => 'BRG002', 'nama' => 'Buku', 'jenis' => 'Alat tulis', 'harga' => 15000],
    ];

    return view('produk', compact('products'));
})->name('produk');

Route::get('/produk/tambah', function () {
    return view('produk_tambah');
})->name('produk.tambah');