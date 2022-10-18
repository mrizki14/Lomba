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
        $hospital = $request->keyword;
        $hospitals = Hospital::where('nama', 'LIKE', '%' . $hospital . '%')
            ->orWhere('lokasi', 'LIKE',  '%' . $hospital . '%')
            ->orWhere('keahlian_penyakit', 'LIKE',  '%' . $hospital . '%')
            ->get();
        return view('index', compact('hospitals'))->with('i', (request()));
    }
    public function cari()
    {
        # code...
    }
    public function rumahsakits()
    {
        $hospitals = Hospital::latest()->paginate(6);

        return view('/rumahsakits', compact('hospitals'))
            ->with('i', (request()->input('page', 1) - 1) * 6);
    }

    public function detailrumahsakit($id)
    {
        $hospital = Hospital::find($id);
        return view('/rumahsakit', compact('hospital'));
    }

    public function penyakits(Request $request)
    {

        $penyakit = $request->penyakit;
        $diseases = Disease::where('nama', 'LIKE', '%' . $penyakit . '%')
            ->orWhere('kualifikasi', 'LIKE', '%' . $penyakit . '%')
            ->get();

        return view('penyakits', compact('diseases'));
        // ->with('i', (request()->input('page', 1) - 1) * 9);
    }
    public function detailpenyakit($id)
    {
        $disease = Disease::find($id);
        return view('/penyakit', compact('disease'));
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
