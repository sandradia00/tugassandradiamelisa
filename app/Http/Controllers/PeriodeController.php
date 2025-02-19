<?php

namespace App\Http\Controllers;

use App\Models\PeriodeModel;
use Illuminate\Http\Request;

class PeriodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $periode=PeriodeModel::get();
        return view ('periode.index', compact('periode'));
    }

    public function create()
    {
       return view ('periode.add');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'img'        => 'required|image|mimes:jpeg,jpg,png|max:2048',
        //     'Namaperiode'   => 'required'
        // ]);
        // $image = $request->file('img');
        // $image->storeAs('public/img', $image->hashName());

        $periode = new PeriodeModel();
        $periode->Periode = $request->Periode;
        $periode->Tanggal_Mulai = $request->Tanggal_Mulai;
        $periode->Tanggal_Selesai = $request->Tanggal_Selesai;
        $periode->Keterangan = $request->Keterangan;
        // $periode->img      = $image->hashName();
        $periode->save();
        return redirect('periode');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $periode = PeriodeModel::find($id);
        return view('periode.edit', compact('periode'));
    }

    public function update(Request $request, string $id)
    {
        $periode = PeriodeModel::find($id);
        $periode->Periode = $request->Periode;
        $periode->Tanggal_Mulai = $request->Tanggal_Mulai;
        $periode->Tanggal_Selesai = $request->Tanggal_Selesai;
        $periode->Keterangan = $request->Keterangan;
        $periode->save();
        return redirect('periode');
    }

    public function destroy(string $id)
    {
        $product = PeriodeModel::findOrFail($id);
        $product->delete();
        return redirect()->route('periode.index')->with(['success' => 'Data Berhasil Dihapus!']);        
    }
}