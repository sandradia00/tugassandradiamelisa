<?php

namespace App\Http\Controllers;

use App\Models\PegawaiModel;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawai=PegawaiModel::get();
        return view ('pegawai.index', compact('pegawai'));
        //
    }

    public function create()
    {
       return view ('pegawai.add');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'img'        => 'required|image|mimes:jpeg,jpg,png|max:2048',
        //     'Namapegawai'   => 'required'
        // ]);
        // $image = $request->file('img');
        // $image->storeAs('public/img', $image->hashName());

        $pegawai = new pegawaiModel();
        $pegawai->nama_pegawai = $request->nama_pegawai;
        $pegawai->alamat = $request->alamat;
        // $pegawai->img      = $image->hashName();
        $pegawai->save();
        return redirect('pegawai');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $pegawai = pegawaiModel::find($id);
        return view('pegawai.edit', compact('pegawai'));
    }

    public function update(Request $request, string $id)
    {
        $pegawai = pegawaiModel::find($id);
        $pegawai->nama_pegawai = $request->nama_pegawai;
        $pegawai->alamat = $request->alamat;
        $pegawai->save();
        return redirect('pegawai');
    }

    public function destroy(string $id)
    {
        $product = pegawaiModel::findOrFail($id);
        $product->delete();
        return redirect()->route('pegawai.index')->with(['success' => 'Data Berhasil Dihapus!']);        
    }
}