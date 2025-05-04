@extends('layouts.app')

@section('title', 'Profil')

@section('content')
<div class="bg-white shadow-md rounded-lg overflow-hidden">
    <div class="bg-gray-800 text-white py-3 px-4 font-bold">Profil Pengguna</div>
    <div class="p-6">
        <div class="md:flex items-start">
            <div class="md:w-1/4 text-center mb-6 md:mb-0">
                <img src="https://www.iconpacks.net/icons/2/free-user-icon-3296-thumb.png" class="rounded-full mx-auto w-32 h-32" alt="Foto Profil">
            </div>
            <div class="md:w-3/4">
                <h2 class="text-2xl font-bold mb-4">Selamat datang, {{ $username }}!</h2>
                <p class="text-gray-700 mb-6">Ini adalah halaman profil Anda.</p>

                <div class="mt-4">
                    <h5 class="text-lg font-bold mb-3">Informasi Profil</h5>
                    <div class="bg-gray-100 rounded-lg overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200">
                            <tbody class="divide-y divide-gray-200">
                                <tr>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/3">Nama Pengguna</th>
                                    <td class="px-6 py-3 whitespace-nowrap text-sm text-gray-900">{{ $username }}</td>
                                </tr>
                                <tr>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/3">Email</th>
                                    <td class="px-6 py-3 whitespace-nowrap text-sm text-gray-900">{{ strtolower($username) }}@example.com</td>
                                </tr>
                                <tr>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/3">Peran</th>
                                    <td class="px-6 py-3 whitespace-nowrap text-sm text-gray-900">Administrator</td>
                                </tr>
                                <tr>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/3">Tanggal Bergabung</th>
                                    <td class="px-6 py-3 whitespace-nowrap text-sm text-gray-900">30 April 2025</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-6 flex justify-end">
                        <button class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded transition duration-300">
                            Edit Profil
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
