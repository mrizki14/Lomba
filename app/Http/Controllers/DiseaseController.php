<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiseaseController extends Controller
{
    public function index()
    {
        $diseases = Disease::latest()->paginate(5);

        return view('contents.dashboard.diseases.index', compact('diseases'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contents.dashboard.diseases.create');
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
            'kualifikasi' => 'required',
            'tingkat_bahaya' => 'required',
            'pengertian' => 'required',
            'penyebab' => 'required',
            'obat' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]);

        $imagesDiseases = time() . '-' .  $request->nama . '-' .
            $request->image->extension();


        $request->image->move(public_path('imagesDiseases'), $imagesDiseases);

        Disease::create([
            'nama' => $request->input('nama'),
            'kualifikasi' => $request->input('kualifikasi'),
            'tingkat_bahaya' => $request->input('tingkat_bahaya'),
            'pengertian' => $request->input('pengertian'),
            'penyebab' => $request->input('penyebab'),
            'obat' => $request->input('obat'),
            'image_path' => $imagesDiseases,
        ]);

        return redirect()->route('diseases.index')
            ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Disease $disease)
    {
        return view('contents.dashboard.diseases.show', compact('disease'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Disease $disease)
    {
        return view('contents.dashboard.diseases.edit', compact('disease'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Disease $disease)
    {

        $request->validate([
            'nama' => 'required',
            'kualifikasi' => 'required',
            'tingkat_bahaya' => 'required',
            'pengertian' => 'required',
            'penyebab' => 'required',
            'obat' => 'required',

        ]);

        $disease->update($request->all());

        return redirect()->route('diseases.index')
            ->with('success', 'Product updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disease $disease)
    {
        $disease->delete();

        return redirect()->route('diseases.index')
            ->with('success', 'Product deleted successfully');
    }
}
