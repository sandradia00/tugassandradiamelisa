@extends('layout.main')

@section('content')
<h3>Edit Data Jurnal</h3>
<form action="{{ route('jurnal.update', $jurnal->TransaksiID) }}" method="post">
    @csrf
    @method('put')
    <table>
        <tr>
            <td>Kode Jurnal</td>
            <td><input type="text" name="JurnalKode" value="{{ $jurnal->JurnalKode }}"></td>
        </tr>
        <tr>
            <td>Nomor Perkiraan</td>
            <td><input type="text" name="NomorPerkiraan" value="{{ $jurnal->NomorPerkiraan }}"></td>
        </tr>
        <tr>
            <td>Tanggal Transaksi</td>
            <td><input type="date" name="TanggalTransaksi" value="{{ $jurnal->TanggalTransaksi }}"></td>
        </tr>
        <tr>
            <td>Jenis Transaksi</td>
            <td><input type="text" name="jenis_transaksi" value="{{ $jurnal->jenis_transaksi }}"></td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td><input type="text" name="Keterangan" value="{{ $jurnal->Keterangan }}"></td>
        </tr>
        <tr>
            <td>Debet</td>
            <td><input type="number" name="debet" value="{{ $jurnal->debet }}"></td>
        </tr>
        <tr>
            <td>Kredit</td>
            <td><input type="number" name="kredit" value="{{ $jurnal->kredit }}"></td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Simpan">
                <a class="btn btn-sm btn-danger" href="{{ url()->previous() }}">Back</a>
            </td>
        </tr>
    </table>
</form>
@endsection