<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use App\Models\Galery;
use Illuminate\Http\Request;
use Storage;
use Illuminate\Support\Facades\DB;


class HospitalsController extends Controller
{
    public function index()
    {
        $hospitals = Hospital::paginate(20);

        return view('contents.dashboard.hospitals.index', compact('hospitals'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contents.dashboard.hospitals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'lokasi' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'deskripsi' => 'required',
            'keahlian_penyakit' => 'required',
            'obat_penyakit' => 'required',
            'rincian_penanganan' => 'required',

        ]);

        $imagesHospitals = time() . '-' .  $request->nama . '-' .
            $request->image->extension();


        $request->image->move(public_path('imagesHospitals'), $imagesHospitals);

        $hospital = new Hospital;


        Hospital::create([
            'nama' => $request->input('nama'),
            'lokasi' => $request->input('lokasi'),
            'image_path' => $imagesHospitals,
            'deskripsi' => $request->input('deskripsi'),
            'keahlian_penyakit' => $request->input('keahlian_penyakit'),
            'obat_penyakit' => $request->input('obat_penyakit'),
            'rincian_penanganan' => $request->input('rincian_penanganan'),

        ]);

        return redirect()->route('hospitals.index')
            ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Hospital $hospital)
    {
        return view('contents.dashboard.hospitals.show', compact('hospital'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Hospital $hospital)
    {
        return view('contents.dashboard.hospitals.edit', compact('hospital'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hospital $hospital)
    {
        $request->validate([
            'nama' => 'required',
            'lokasi' => 'required',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'deskripsi' => 'required',
            'keahlian_penyakit' => 'required',
            'obat_penyakit' => 'required',
            'rincian_penanganan' => 'required',

        ]);

        $hospital->update($request->all());

        return redirect()->route('hospitals.index')
            ->with('success', 'Product updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hospital $hospital)
    {
        $hospital->delete();

        return redirect()->route('hospitals.index')
            ->with('success', 'Product deleted successfully');
    }
}
