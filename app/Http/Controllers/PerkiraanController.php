<?php

namespace App\Http\Controllers;

use App\Models\PerkiraanModel;
use Illuminate\Http\Request;

class PerkiraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perkiraan=PerkiraanModel::get();
        return view ('perkiraan.index', compact('perkiraan'));
        //
    }

    public function create()
    {
       return view ('perkiraan.add');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'img'        => 'required|image|mimes:jpeg,jpg,png|max:2048',
        //     'Namaperkiraan'   => 'required'
        // ]);
        // $image = $request->file('img');
        // $image->storeAs('public/img', $image->hashName());

        $perkiraan = new PerkiraanModel();
        $perkiraan->id_perkiraan = $request->id_perkiraan;
        $perkiraan->no_perkiraan = $request->no_perkiraan;
        $perkiraan->nama_perkiraan = $request->nama_perkiraan;
        $perkiraan->tipe = $request->tipe;
        $perkiraan->induk = $request->induk;
        $perkiraan->level = $request->level;
        $perkiraan->kelompok = $request->kelompok;
        $perkiraan->normal = $request->normal;
        $perkiraan->awal_debet = $request->awal_debet;
        $perkiraan->awal_kredit = $request->awal_kredit;
        $perkiraan->mut_debet = $request->mut_debet;
        $perkiraan->mut_kredit = $request->mut_kredit;
        $perkiraan->sisa_debet = $request->sisa_debet;
        $perkiraan->sisa_kredit = $request->sisa_kredit;
        $perkiraan->rl_debet = $request->rl_debet;
        $perkiraan->rl_kredit = $request->rl_kredit;
        $perkiraan->nrc_debet = $request->nrc_debet;
        $perkiraan->nrc_kredit = $request->nrc_kredit;
        // $perkiraan->img      = $image->hashName();
        $perkiraan->save();
        return redirect('perkiraan');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $perkiraan = PerkiraanModel::find($id);
        return view('perkiraan.edit', compact('perkiraan'));
    }

    public function update(Request $request, string $id)
    {
        $perkiraan = PerkiraanModel::find($id);
        $perkiraan->id_perkiraan = $request->id_perkiraan;
        $perkiraan->no_perkiraan = $request->no_perkiraan;
        $perkiraan->nama_perkiraan = $request->nama_perkiraan;
        $perkiraan->tipe = $request->tipe;
        $perkiraan->induk = $request->induk;
        $perkiraan->level = $request->level;
        $perkiraan->kelompok = $request->kelompok;
        $perkiraan->normal = $request->normal;
        $perkiraan->awal_debet = $request->awal_debet;
        $perkiraan->awal_kredit = $request->awal_kredit;
        $perkiraan->mut_debet = $request->mut_debet;
        $perkiraan->mut_kredit = $request->mut_kredit;
        $perkiraan->sisa_debet = $request->sisa_debet;
        $perkiraan->sisa_kredit = $request->sisa_kredit;
        $perkiraan->rl_debet = $request->rl_debet;
        $perkiraan->rl_kredit = $request->rl_kredit;
        $perkiraan->nrc_debet = $request->nrc_debet;
        $perkiraan->nrc_kredit = $request->nrc_kredit;
        $perkiraan->save();
        return redirect('perkiraan');
    }

    public function destroy(string $id)
    {
        $product = PerkiraanModel::findOrFail($id);
        $product->delete();
        return redirect()->route('perkiraan.index')->with(['success' => 'Data Berhasil Dihapus!']);        
    }
}