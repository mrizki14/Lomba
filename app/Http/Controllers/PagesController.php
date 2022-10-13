<?php

namespace App\Http\Controllers;

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
    public function rumahsakit()
    {
        $hospitals = Hospital::latest()->paginate(6);

        return view('/rumahsakits', compact('hospitals'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function penyakit()
    {
        return view('/penyakit');
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
