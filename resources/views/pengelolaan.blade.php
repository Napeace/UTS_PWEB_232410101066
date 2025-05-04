@extends('layouts.app')

@section('title', 'Pengelolaan')

@section('content')
<div class="bg-white shadow-md rounded-lg overflow-hidden">
    <div class="bg-gray-800 text-white py-3 px-4 flex justify-between items-center">
        <span class="font-bold">Data Produk</span>
        <button class="bg-blue-500 hover:bg-blue-700 text-white text-sm font-bold py-1 px-3 rounded">
            Tambah Produk
        </button>
    </div>
    <div class="m-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($items as $item)
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="bg-gray-800 text-white py-2 px-4 font-bold">{{ $item['name'] }}</div>
                <div class="p-4">
                    <h5 class="text-lg font-bold text-gray-900 mb-2">Rp {{ number_format($item['price'], 0, ',', '.') }}</h5>
                    <p class="text-gray-700 mb-1">Kategori: {{ $item['category'] }}</p>
                    <p class="text-gray-700 mb-4">Stok: {{ $item['stock'] }}</p>
                    <div class="flex justify-between">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-3 rounded text-sm">Edit</button>
                        <button class="bg-red-500 hover:bg-red-700 text-white py-1 px-3 rounded text-sm">Hapus</button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>


@endsection
