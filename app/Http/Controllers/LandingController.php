<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kecamatan;
use App\Models\Sekolah;
use Illuminate\Support\Facades\Auth;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing.index', [
            'active' => 'index',
            'call' => 'Beranda',
            'sekolahs' => Sekolah::with([
                'peta' => function ($query) {
                    $query->orderBy('file', 'asc');
                },
            ])->get(),
        ]);
    }
    public function asesmen_kec()
    {
        return view('landing.asesmen.kec', [
            'active' => 'asesmen',
            'call' => 'Asesmen',
            'kecamatans' => Kecamatan::orderBy('nama_kec', 'desc')->get(),
        ]);
    }
    public function asesmen_detail(Kecamatan $kecamatan)
    {
        return view('landing.asesmen.detail', [
            'active' => 'asesmen',
            'call' => 'Asesmen',
            'nama_kec' => $kecamatan->nama_kec,
            'sekolahs' => Sekolah::where('nama_kec', $kecamatan->nama_kec)
                ->orderBy('nama_sekolah', 'desc')
                ->get(),
        ]);
    }
    public function sekolah(Sekolah $sekolah)
    {
        return view('landing.asesmen.sekolah', [
            'active' => 'asesmen',
            'call' => $sekolah->nama_sekolah,
            'nama_kec' => $sekolah->nama_kec,
            'sekolah' => Sekolah::where('nama_sekolah', $sekolah->nama_sekolah)
                ->orderBy('nama_sekolah', 'desc')
                ->first(),
          
        ]);
    }
    public function tentang()
    {
        return view('landing.tentang', [
            'active' => 'tentang',
            'call' => 'Tentang',
        ]);
    }
    //Login
    public function login()
    {
        return view('landing.login', [
            'active' => 'index1',
            'call' => 'Login',
        ]);
    }
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()
                ->intended('/dashboard')
                ->with('success', 'Selamat Datang di Dashboard Sistem!');
        }
        return back()->with('loginError', 'Username/Password Anda Salah, Coba Lagi!');
    }
}
