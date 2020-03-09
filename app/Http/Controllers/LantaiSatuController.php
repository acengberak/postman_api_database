<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LantaiSatu;

class LantaiSatuController extends Controller
{
    public function create(Request $request)
    {
        $data = new LantaiSatu;

        $data->name = $request->input('name');
        $data->posisi_awal = $request->input('posisi_awal');
        $data->posisi_akhir = $request->input('posisi_akhir');
        $data->jumlah_kwh = $request->input('jumlah_kwh');
        $data->total = $request->input('total');

        $data->save();
        return response()->json([
            'status' => true,
            'data' => $data
        ]);
    }

    public function show()
    {
        $data = LantaiSatu::all();
        return response()->json([
            'status' => true,
            'data' => $data
        ]);
    }

    public function edit($id)
    {
        $data = LantaiSatu::find($id);

        return response()->json([
            'status' => true,
            'data' => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = LantaiSatu::find($id);


        $data->name = $request->input('name');
        $data->posisi_awal = $request->input('posisi_awal');
        $data->posisi_akhir = $request->input('posisi_akhir');
        $data->jumlah_kwh = $request->input('jumlah_kwh');
        $data->total = $request->input('total');

        $data->save();

        return response()->json([
            'status' => true,
            'data' => $data
        ]);
    }
}
