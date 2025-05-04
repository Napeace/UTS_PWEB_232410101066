<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginProcess(Request $request)
    {
        $username = $request->input('username');
        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Guest');
        return view('dashboard', compact('username'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username', 'Guest');
        return view('profile', compact('username'));
    }

    public function pengelolaan()
    {
        $items = [
            [
                'id' => 1,
                'name' => 'Beras Premium 5kg',
                'price' => 65000,
                'stock' => 40,
                'category' => 'Sembako'
            ],
            [
                'id' => 2,
                'name' => 'Minyak Goreng 2L',
                'price' => 35000,
                'stock' => 60,
                'category' => 'Sembako'
            ],
            [
                'id' => 3,
                'name' => 'Gula Pasir 1kg',
                'price' => 14000,
                'stock' => 80,
                'category' => 'Sembako'
            ],
            [
                'id' => 4,
                'name' => 'Telur Ayam 1kg',
                'price' => 28000,
                'stock' => 50,
                'category' => 'Sembako'
            ],
            [
                'id' => 5,
                'name' => 'Mie Instan (5 pcs)',
                'price' => 12000,
                'stock' => 100,
                'category' => 'Sembako'
            ],
            [
                'id' => 5,
                'name' => 'Mie test (5 pcs)',
                'price' => 12000,
                'stock' => 100,
                'category' => 'Sembako'
            ]
        ];

        return view('pengelolaan', compact('items'));
    }
}
