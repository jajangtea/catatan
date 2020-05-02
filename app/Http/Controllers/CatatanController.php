<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catatan;

class CatatanController extends Controller
{
    public function index()
    {
        return response()->json(Catatan::get());
    }

    public function show($id)
    {
        $data = Catatan::where('id', $id)->get();
        return response()->json($data);
    }
    public function store(Request $request)
    {
        $data = new Catatan();
        $data->judul = $request->input('judul');
        $data->isi = $request->input('isi');
        $data->save();
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $data = Catatan::where('id', $id)->first();
        $data->judul = $request->input('judul');
        $data->isi = $request->input('isi');
        $data->save();
        return response('Berhasil Mengubah Data');
    }

    public function destroy($id)
    {
        $data = Catatan::where('id', $id)->first();
        $data->delete();
        return response('Berhasil Menghapus Data');
    }
}
