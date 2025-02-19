<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user=UserModel::get();
        return view ('user.index', compact('user')); 
        //
    }

    public function create()
    {
        return view ('user.add');
    }

    public function store(Request $request)
    {
    // $request->validate([
        //     'img'        => 'required|image|mimes:jpeg,jpg,png|max:2048',
        //     'Namauser'   => 'required'
        // ]);
        // $image = $request->file('img');
        // $image->storeAs('public/img', $image->hashName());

        $user = new UserModel();
        $user->Id_User = $request->Id_User;
        $user->Nama_User = $request->Nama_User;
        $user->Password = $request->Password;
        $user->Level = $request->Level;
        // $user->img      = $image->hashName();
        $user->save();
        return redirect('user');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = UserModel::find($id);
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = UserModel::find($id);
        $user->Id_User = $request->Id_User;
        $user->Nama_User = $request->Nama_User;
        $user->Password = $request->Password;
        $user->Level = $request->Level;
        $user->save();
        return redirect('user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = UserModel::findOrFail($id);
        $product->delete();
        return redirect()->route('user.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
