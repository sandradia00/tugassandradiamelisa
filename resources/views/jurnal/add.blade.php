@extends('layout.main')
@section('content')
<div class="container">
    <h2>Tambah Data Jurnal</h2>
    <form action="{{ route('jurnal.store') }}" method="POST">
        @error('JurnalKode')
            <div class="text-danger">{{ $message }}</div>
        @enderror
        @csrf

        <div class="form-group">
            <label>Kode Jurnal</label>
            <input type="text" name="JurnalKode" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Nomor Perkiraan</label>
            <input type="text" name="NomorPerkiraan" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Tanggal Transaksi</label>
            <input type="date" name="TanggalTransaksi" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Jenis Transaksi</label>
            <input type="text" name="jenis_transaksi" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Keterangan</label>
            <textarea name="Keterangan" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label>Debet</label>
            <input type="number" name="debet" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Kredit</label>
            <input type="number" name="kredit" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>
</div>
@endsection