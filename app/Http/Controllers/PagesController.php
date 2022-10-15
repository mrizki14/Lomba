<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use App\Models\Hospital;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index(Request $request)
    {
        // $keyword = $request->keyword;
        // dd($keyword);
        return view('/index');
    }
    public function rumahsakits()
    {
        $hospitals = Hospital::latest()->paginate(6);

        return view('/rumahsakits', compact('hospitals'))
            ->with('i', (request()->input('page', 1) - 1) * 6);
    }
    public function penyakits(Request $request)
    {

        $penyakit = $request->penyakit;
        $diseases = Disease::where('nama', 'LIKE', '%' . $penyakit . '%')
            ->orWhere('kualifikasi', 'LIKE', '%' . $penyakit . '%')
            ->paginate(9);

        return view('penyakits', compact('diseases'))
            ->with('i', (request()->input('page', 1) - 1) * 9);
    }
    public function tentang()
    {
        return view('/tentang');
    }
    public function login()
    {
        return view('/login');
    }
}
