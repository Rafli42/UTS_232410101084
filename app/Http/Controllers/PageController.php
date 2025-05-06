<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private $users=[
        [
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
        if (Session::has('user')) {
            return redirect(route('dashboard'));
        }
        return view('login');
    }

    public function loginStore(Request $request)
        {
            $request->validate([
                'username' => 'required',
                'password' => 'required',
            ],
            [
                'username.required' => 'harap mengisi username',
                'password.required' => 'harap mengisi password'
            ]);

        foreach ($this->users as $user)
        {
            if($user['username'] === $request->username && $user['password'] === $request->password)
            {
                Session::put('user', ['username' => $user['username'],'nama' => $user['nama'],'alamat' => $user['alamat'] ,'no_hp' => $user['no_hp'] ]);
                return redirect()->route('dashboard');
            }
        }
        return back();
    }
    public function Logout()
    {
        Session::flash('user');
        Session::flash('keranjang');
        return redirect()->route('showlogin');
    }

    public function dashboard()
    {
        if (!Session::has('user')) {
            return redirect(route('showlogin'));
        }

        return view('dashboard', [
            'barang' => $this->barang,
        ]);
    }

    public function profile()
    {
        if (!Session::has('user')) {
            return redirect(route('showlogin'));
        }

        return view('profile', ['user' => Session::get('user')]);
    }
    public function pengelolaan()
    {
        if (!Session::has('user')) {
            return redirect(route('showlogin'));
        }

        return view('pengelolaan', [
            'barang' => $this->barang,
            'keranjang' => Session::get('keranjang', []),
            'total' => Session::get('total', 0),
        ]);
    }
    public function tambahBarang(Request $request)
{
    $barangNama = $request->input('nama');
    $jumlah = (int)$request->input('jumlah');

    foreach ($this->barang as $item) {
        if ($item['nama'] === $barangNama) {
            $totalHarga = $item['harga'] * $jumlah;
            $keranjang = Session::get('keranjang', []);
            $keranjang[] = [
                'nama' => $item['nama'],
                'harga' => $item['harga'],
                'jumlah' => $jumlah,
                'total' => $totalHarga,
            ];
            Session::put('keranjang', $keranjang);

            $total = Session::get('total', 0);
            $total += $totalHarga;
            Session::put('total', $total);
            break;
        }
    }

    return redirect()->route('pengelolaan');
}
}
