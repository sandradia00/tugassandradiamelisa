@extends('layout.main')
@section('content')
<h31>Tambah Data</h3>
<form action="{{ route('kelompok.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <table>
    <tr>
            <td>Kelompok</td><td><input type="text" name="Kelompok"></td>
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
