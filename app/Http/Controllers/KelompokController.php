<?php

namespace App\Http\Controllers;

use App\Models\KelompokModel;
use Illuminate\Http\Request;

class KelompokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelompok=KelompokModel::get();
        return view ('kelompok.index', compact('kelompok'));
    }

    public function create()
    {
       return view ('kelompok.add');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'img'        => 'required|image|mimes:jpeg,jpg,png|max:2048',
        //     'Namakelompok'   => 'required'
        // ]);
        // $image = $request->file('img');
        // $image->storeAs('public/img', $image->hashName());

        $kelompok = new KelompokModel();
        $kelompok->Kelompok = $request->Kelompok;
        // $kelompok->img      = $image->hashName();
        $kelompok->save();
        return redirect('kelompok');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $kelompok = KelompokModel::find($id);
        return view('kelompok.edit', compact('kelompok'));
    }

    public function update(Request $request, string $id)
    {
        $kelompok = KelompokModel::find($id);
        $kelompok->Kelompok = $request->Kelompok;
        $kelompok->save();
        return redirect('kelompok');
    }

    public function destroy(string $id)
    {
        $product = KelompokModel::findOrFail($id);
        $product->delete();
        return redirect()->route('kelompok.index')->with(['success' => 'Data Berhasil Dihapus!']);        
    }
}