@extends('layout.main')
@section('content')
<h3>Edit Data</h3>
<form action="{{ route('periode.update', $periode->id) }}" method="post">
    @csrf
    @method('put')
    <table>
        <tr>
            <td>Periode</td><td><input type="number" name="Periode" value="{{ $periode->Periode }}"></td>
        </tr>
        <tr>
            <td>Tanggal Mulai</td><td><input type="date" name="Tanggal_Mulai" value="{{ $periode->Tanggal_Mulai }}"></td>
        </tr>
        <tr>
            <td>Tanggal Selesai</td><td><input type="date" name="Tanggal_Selesai" value="{{ $periode->Tanggal_Selesai }}"></td>
        </tr>
        <tr>
            <td>Keterangan</td><td><input type="text" name="Keterangan" value="{{ $periode->Keterangan }}"></td>
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