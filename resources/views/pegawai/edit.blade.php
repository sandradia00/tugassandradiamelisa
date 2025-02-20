@extends('layout.main')
@section('content')
<h3>Edit Data</h3>
<form action="{{ route('pegawai.update', $pegawai->id) }}" method="post">
    @csrf
    @method('put')
    <table>
        <tr>
            <td>Nama pegawai</td><td><input type="text" name="nama_pegawai" value="{{ $pegawai->nama_pegawai }}"></td>
        </tr>
        <tr>
            <td>alamat</td><td><input type="text" name="alamat" value="{{ $pegawai->alamat }}"></td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Simpan">
                <a class="btn btn-sm btn-danger" href="{{ url()->previous() }}" >Back</a>
            </td>
        </tr>
    </table>
</form>
@endsection