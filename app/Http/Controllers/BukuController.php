<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        return response()->json([
            'status' => true,
            'data' => $buku
        ]);
    }


    public function store(Request $request)
    {
        Buku::create($request->all());
        return response()->json(['status' => 'success'], 200);
    }


    public function show($id)
    {
        $buku = Buku::find($id);
        return response()->json([
            'status' => 'success',
            'data' => $buku
        ]);
    }

    public function edit($id)
    {
        $buku = Buku::where($id);
        return response()->json([
            'status' => 'success',
            'data' => $buku
        ]);
    }

    public function update(Request $request, $id)
    {
        $buku = Buku::where('id', $id)->first();

        $buku->judul = $request->judul;
        $buku->penerbit = $request->penerbit;
        $buku->pengarang = $request->pengarang;
        $buku->save();
        return response()->json([
            'status' => 'success',
            'data' => $buku
        ]);
    }

    public function destroy($id)
    {
        $buku = Buku::find($id);
        $buku->delete();

        return response()->json([
            'status' => 'sucess',
            'data' => $buku
        ]);
    }
}
