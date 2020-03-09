<?php

namespace App\Http\Controllers;

use App\KaryawanAPI;
use Facade\Ignition\QueryRecorder\Query;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function create(Request $request)
    {
        $karyawan = new KaryawanAPI;

        $karyawan->fname = $request->input('fname');
        $karyawan->lname = $request->input('lname');
        $karyawan->gender = $request->input('gender');
        $karyawan->no_hp = $request->input('no_hp');
        $karyawan->tgl_lahir = $request->input('tgl_lahir');

        $karyawan->save();
        return response()->json([
            'status' => true,
            'karyawan' => $karyawan
        ]);
    }


    public function show()
    {
        $karyawan = KaryawanAPI::all();
        return response()->json([
            'status' => true,
            'karyawan' => $karyawan
        ]);
    }

    public function edit($id)
    {
        $karyawan = KaryawanAPI::find($id);

        return response()->json([
            'status' => true,
            'karyawan' => $karyawan
        ]);
    }

    public function update(Request $request, $id)
    {
        $karyawan = KaryawanAPI::find($id);

        $karyawan->fname = $request->input('fname');
        $karyawan->lname = $request->input('lname');
        $karyawan->gender = $request->input('gender');
        $karyawan->no_hp = $request->input('no_hp');
        $karyawan->tgl_lahir = $request->input('tgl_lahir');

        $karyawan->save();

        return response()->json([
            'status' => true,
            'karyawan' => $karyawan
        ]);
    }

    public function destroy($id)
    {
        $karyawan = KaryawanAPI::find($id);
        $karyawan->delete();

        return response()->json([
            'status' => 'success',
            'karyawan' => $karyawan
        ]);     
    }
}
