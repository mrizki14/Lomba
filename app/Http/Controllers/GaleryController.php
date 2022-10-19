<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Galery;

class GaleryController extends Controller
{
    public function index(Request $request)
    {

        // $hospital = Hospital::with('galery')->get();
        // $data = $request->validate([
        //     'image' => 'required'
        // ]);
        // $new_galery = Hospital::create($data);
        // if ($request->has('image')) {
        //     foreach ($request->file('image') as $image) {
        //         $imageName = $data['title'] . '-image-' . time() . rand(1, 1000) . '.' . $image->extension();
        //         $image->move(public_path('imageGalery'), $imageName);
        //         Hospital::create([
        //             'product_id' => $new_galery->id,
        //             'image' => $imageName
        //         ]);
        //     }
        // }
        $hospital = Hospital::all();
        return view('rumahsakit')
            ->with('success', 'Product created successfully.');
    }

    public function tambahGalery($id) {
        return view('contents.dashboard.hospitals.imageGalery', compact('id'));
    }

    public function store(Request $request)
    {
        // $hospital = Hospital::get();

        if ($request->file('file')) {
            $filename = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $request->file('file')->getClientOriginalName());
            $request->file('file')->move('imagesGalery', $filename);
            $request->request->add(['image' => $filename]);
        }

        $request->validate([
            'image_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',

        ]);

        $imagesHospitals = time() . '-' .  $request->hospital_id . '-' .
            $request->image_url->extension();

        $request->image_url->move(public_path('imagesGalery'), $imagesHospitals);

        Galery::create([

            'image_url' => $imagesHospitals,
            'hospital_id' => $request->hospital_id
        ]);

        return redirect()->route('hospitals.index')
            ->with('success', 'Product created successfully.');
    }
    public function show(Galery $id)
    {
        $galleries = Galery::find('id');
        return view('/rumahsakit', compact('galleries'));
    }
}
