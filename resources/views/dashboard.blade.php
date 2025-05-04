@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="bg-white shadow-md rounded-lg overflow-hidden">
    <div class="bg-gray-800 text-white py-3 px-4 font-bold">Dashboard</div>
    <div class="p-6">
        <h2 class="text-2xl font-bold mb-4">Selamat datang, {{ $username }}!</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
            <div class="bg-blue-500 text-white rounded-lg shadow-md overflow-hidden">
                <div class="px-4 py-3 bg-blue-600 font-bold">Total Pengguna</div>
                <div class="p-3">
                    <h5 class="text-3xl font-bold">250</h5>
                    <p class="mt-2 text-blue-100">Pengguna Terdaftar</p>
                </div>
            </div>

            <div class="bg-green-500 text-white rounded-lg shadow-md overflow-hidden">
                <div class="px-4 py-3 bg-green-600 font-bold">Produk Aktif</div>
                <div class="p-3">
                    <h5 class="text-3xl font-bold">5</h5>
                    <p class="mt-2 text-green-100">Tersedia di Toko</p>
                </div>
            </div>

            <div class="bg-purple-500 text-white rounded-lg shadow-md overflow-hidden">
                <div class="px-4 py-3 bg-purple-600 font-bold">Total Penjualan</div>
                <div class="p-3">
                    <h5 class="text-3xl font-bold">Rp 15.000.000</h5>
                    <p class="mt-2 text-purple-100">Pendapatan Kotor</p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
            <div class="bg-yellow-500 text-white rounded-lg shadow-md overflow-hidden">
                <div class="px-4 py-3 bg-yellow-600 font-bold">Transaksi Bulan Ini</div>
                <div class="p-3">
                    <h5 class="text-3xl font-bold">47</h5>
                    <p class="mt-2 text-yellow-100">Transaksi Berhasil</p>
                </div>
            </div>

            <div class="bg-red-500 text-white rounded-lg shadow-md overflow-hidden">
                <div class="px-4 py-3 bg-red-600 font-bold">Stok Menipis</div>
                <div class="p-3">
                    <h5 class="text-3xl font-bold">2</h5>
                    <p class="mt-2 text-red-100">Produk Perlu Diisi Ulang</p>
                </div>
            </div>
        </div>

        </div>
    </div>
</div>
@endsection
