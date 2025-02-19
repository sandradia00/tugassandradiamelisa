<?php

namespace App\Http\Controllers;

use App\Models\JurnalModel;
use Illuminate\Http\Request;

class JurnalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jurnal=JurnalModel::get();
        return view ('jurnal.index', compact('jurnal'));
    }

    
    public function create()
    {
       return view ('jurnal.add');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'img'        => 'required|image|mimes:jpeg,jpg,png|max:2048',
        //     'Namajurnal'   => 'required'
        // ]);
        // $image = $request->file('img');
        // $image->storeAs('public/img', $image->hashName());

        $jurnal = new JurnalModel();
        $jurnal->TransaksiId = $request->TransaksiId;
        $jurnal->JurnalKode = $request->JurnalKode;
        $jurnal->NomorPerkiraan = $request->NomorPerkiraan;
        $jurnal->TanggalTransaksi = $request->TanggalTransaksi;
        $jurnal->JenisTransaksi = $request->JenisTransaksi;
        $jurnal->Keterangan = $request->Keterangan;
        $jurnal->Debet = $request->Debet;
        $jurnal->Kredit = $request->Kredit;
        $jurnal->tanggal_posting = $request->tanggal_posting;
        $jurnal->keterangan_posting = $request->keterangan_posting;
        $jurnal->sIdUser = $request->sIdUser;
        // $jurnal->img      = $image->hashName();
        $jurnal->save();
        return redirect('jurnal');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $jurnal = JurnalModel::find($id);
        return view('jurnal.edit', compact('jurnal'));
    }

    public function update(Request $request, string $id)
    {
        $jurnal = JurnalModel::find($id);
        $jurnal->TanggalTransaksi = $request->TanggalTransaksi;
        $jurnal->JenisTransaksi = $request->JenisTransaksi;
        $jurnal->Keterangan = $request->Keterangan;
        $jurnal->Debet = $request->Debet;
        $jurnal->Kredit = $request->Kredit;
        $jurnal->tanggal_posting = $request->tanggal_posting;
        $jurnal->keterangan_posting = $request->keterangan_posting;
        $jurnal->sIdUser = $request->sIdUser;
        $jurnal->save();
        return redirect('jurnal');
    }

    public function destroy(string $id)
    {
        $product = JurnalModel::findOrFail($id);
        $product->delete();
        return redirect()->route('jurnal.index')->with(['success' => 'Data Berhasil Dihapus!']);        
    }
}