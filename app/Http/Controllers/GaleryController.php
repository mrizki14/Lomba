<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GaleryController extends Controller
{
    public function store(Request $request)
    {

        // $data = $request->validate([
        //     'image' => 'required'
        // ]);
        // $new_galery = Hospital::create($data);
        // if ($request->has('images')) {
        //     foreach ($request->file('images') as $image) {
        //         $imageName = $data['title'] . '-image-' . time() . rand(1, 1000) . '.' . $image->extension();
        //         $image->move(public_path('imageGalery'), $imageName);
        //         Hospital::create([
        //             'product_id' => $new_galery->id,
        //             'image' => $imageName
        //         ]);
        //     }
        // }


        // return redirect()->route('hospitals.imageGalery')
        //     ->with('success', 'Product created successfully.');
        return view('contents.dashboard.hospitals.imageGalery');
        // ->with('success', 'Product created successfully.');
    }
}
