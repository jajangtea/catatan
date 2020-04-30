<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catatan;

class CatatanController extends Controller
{
    public function index()
    {
        $data = Catatan::all();
        return response($data);
    }

    public function show($id)
    {
        $data = Catatan::where('id', $id)->get();
        return response($data);
    }
    public function store(Request $request)
    {
        $data = new Catatan();
        $data->judul = $request->input('judul');
        $data->isi = $request->input('isi');
        $data->save();
        return response('Berhasil Tambah Data');
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
