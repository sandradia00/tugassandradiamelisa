<?php

namespace App\Http\Controllers;

use App\Models\DJurnalModel;
use App\Models\HJurnalModel;
use Illuminate\Http\Request;
use App\HJurnal;

class JurnalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil data dengan relasi ke Hjurnal dan Akuntansi Master
        $jurnalData = DjurnalModel::with(['hjurnal', 'akun'])->get();

        return view('jurnal.index', compact('jurnalData'));
    }

    
    public function create()
    {
       return view ('jurnal.add');
    }

    public function store(Request $request)
    {

        // dd($request->all());
        $data = new DJurnalModel();
        $data->JurnalKode = $request->JurnalKode;
        $data->NomorPerkiraan = $request->NomorPerkiraan;
        $data->TanggalTransaksi = $request->TanggalTransaksi;
        $data->jenis_transaksi = $request->jenis_transaksi;
        $data->Keterangan = $request->Keterangan;
        $data->debet = $request->debet;
        $data->kredit = $request->kredit;
        $data->save();

    return redirect()->route('jurnal.index')->with('success', 'Data berhasil ditambahkan!');

        return redirect()->route('jurnal.index')->with('success', 'Data jurnal berhasil ditambahkan.');
    }
    
    public function edit($id)
    {
        $jurnal = DJurnalModel::findOrFail($id);
        return view('jurnal.edit', compact('jurnal'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'JurnalKode' => 'required|string|max:255',
            'NomorPerkiraan' => 'required|string|max:255',
            'TanggalTransaksi' => 'required|date',
            'jenis_transaksi' => 'required|string|max:255',
            'Keterangan' => 'required|string',
            'debet' => 'required|numeric',
            'kredit' => 'required|numeric',
        ]);

        $jurnal = DJurnalModel::findOrFail($id);
        $jurnal->update($request->all());

        return redirect()->route('jurnal.index')->with('success', 'Data jurnal berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $jurnal = DJurnalModel::findOrFail($id);
        $jurnal->delete();

        return redirect()->route('jurnal.index')->with('success', 'Data jurnal berhasil dihapus!');
    }
}