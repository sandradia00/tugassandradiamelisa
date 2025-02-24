@extends('layout.main')
@section('content')
<div class="container">
    <h2>Data Jurnal</h2>
    <a href="{{ route('jurnal.create') }}" class="btn btn-success mb-3">Tambah Data</a>
    <table class="table table-sm table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>Kode Jurnal</th>
                <th>Tanggal Selesai</th>
                <th>Transaksi ID</th>
                <th>Nomor Perkiraan</th>
                <th>Nama Perkiraan</th>
                <th>Tanggal Transaksi</th>
                <th>Jenis Transaksi</th>
                <th>Keterangan</th>
                <th>Debet</th>
                <th>Kredit</th>
                <th>Aksi</th>  <!-- Tambahkan kolom Aksi -->
            </tr>
        </thead>
        <tbody>
            @foreach($jurnalData as $data)
            <tr>
                <td>{{ $data->JurnalKode }}</td>
                <td>{{ optional($data->hjurnal)->TanggalSelesai ?? '-' }}</td>
                <td>{{ $data->TransaksiID }}</td>
                <td>{{ $data->NomorPerkiraan }}</td>
                <td>{{ optional($data->akun)->nama_perkiraan ?? '-' }}</td>
                <td>{{ $data->TanggalTransaksi }}</td>
                <td>{{ $data->jenis_transaksi }}</td>
                <td>{{ $data->Keterangan ?? '-' }}</td>
                <td>{{ number_format($data->debet, 2) }}</td>
                <td>{{ number_format($data->kredit, 2) }}</td>
                <td>
                    <!-- Tombol Edit -->
                    <a href="{{ route('jurnal.edit', $data->TransaksiID) }}" class="btn btn-warning">Edit</a> |

                    <!-- Tombol Hapus dengan Konfirmasi -->
                    <form action="{{ route('jurnal.destroy', $data->TransaksiID) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection