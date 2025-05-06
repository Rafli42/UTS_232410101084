<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private $users = [
        [
            'id' => '1',
            'nama' => 'Haudan',
            'username' => 'Haudan',
            'password' => 'Haudan',
            'alamat' => 'JL. Karimata Gg. Bukit Permai Cluster No.7',
            'no_hp' => '081232378068'
        ]
    ];

    private $barang = [
        ['nama' => 'Turbo', 'harga' => 2000000],
        ['nama' => 'Brembo', 'harga' => 5000000],
        ['nama' => 'Radiator', 'harga' => 1500000],
        ['nama' => 'Filter Udara', 'harga' => 700000],
        ['nama' => 'Remap', 'harga' => 5000000],
        ['nama' => 'Knalpot', 'harga' => 1500000],
        ['nama' => 'Tune Up', 'harga' => 2500000],
        ['nama' => 'Velg', 'harga' => 10000000],
        ['nama' => 'Karbon Paket 1', 'harga' => 600000],
        ['nama' => 'karbon Paket 2', 'harga' => 50000000],
        ['nama' => 'Boost Gouge', 'harga' => 700000],
        ['nama' => 'Oli MOTOUL', 'harga' => 750000],
        ['nama' => 'Ban Nankang', 'harga' => 2450000],
    ];

    public function login()
    {
        return view('login');
    }

    public function loginStore(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ], [
            'username.required' => 'harap mengisi username',
            'password.required' => 'harap mengisi password'
        ]);

        foreach ($this->users as $user) {
            if ($user['username'] === $request->username && $user['password'] === $request->password) {
                return redirect()->route('dashboard', ['id' => $user['id']]);
            }
        }

        return back()->withErrors(['login' => 'Username atau password salah']);
    }

    public function logout()
    {
        return redirect()->route('showlogin');
    }

    public function dashboard($id)
    {
        $user = collect($this->users)->firstWhere('id', $id);

        if (!$user) {
            return redirect(route('showlogin'));
        }

        $produk = count($this->barang);

        return view('dashboard', [
            'barang' => $produk,
            'id' => $id,
        ]);
    }

    public function showprofile($id)
    {
        $user = collect($this->users)->firstWhere('id', $id);

        if (!$user) {
            return redirect(route('showlogin'));
        }

        return view('profile', [
                'id' => $id,
                'nama' => $user['nama'],
                'username' => $user['username'],
                'alamat' => $user['alamat'],
                'no_hp' => $user['no_hp']
            ]);
    }

    public function pengelolaan($id)
    {
        $user = collect($this->users)->firstWhere('id', $id);

        if (!$user) {
            return redirect(route('showlogin'));
        }

        return view('pengelolaan', [
            'barang' => $this->barang,
            'id' => $id,
        ]);
    }
}
