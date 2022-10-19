<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use App\Models\Galery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HospitalController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hospital = Hospital::where('id', $id)->first();
        $galleries = Galery::where('hospital_id', $id)->first();
        return view('rumahsakit', compact('hospital', 'galleries'));
    }
}
