<h1 class="text-center my-3">Master jurnal</h1>

<div class="container">
    <div class="card shadow-lg">
        <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Data jurnal</h5>
            <a href="{{ route('jurnal.create') }}" class="btn btn-success btn-sm">Tambah Data</a>
        </div>

        <div class="card-body">
            <table class="table table-sm table-striped table-hover table-bordered">
                <thead class="bg-dark text-white">
                    <tr>
                        <th>No</th>
                        <th>Transaksi Id</th>
                        <th>Jurnal Kode</th>
                        <th>Nomor Perkiraan</th>
                        <th>Tanggal Transaksi</th>
                        <th>Jenis Transaksi</th>
                        <th>Keterangan</th>
                        <th>Debet</th>
                        <th>Kredit</th>
                        <th>Tanggal Posting</th>
                        <th>Keterangan Posting</th>
                        <th>ID User</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jurnal as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->TransaksiId }}</td>
                            <td>{{ $item->JurnalKode }}</td>
                            <td>{{ $item->NomorPerkiraan }}</td>
                            <td>{{ $item->TanggalTransaksi }}</td>
                            <td>{{ $item->JenisTransaksi }}</td>
                            <td>{{ $item->Keterangan }}</td>
                            <td>{{ $item->Debet }}</td>
                            <td>{{ $item->Kredit }}</td>
                            <td>{{ $item->tanggal_posting }}</td>
                            <td>{{ $item->keterangan_posting }}</td>
                            <td>{{ $item->sIdUser }}</td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" 
                                      action="{{ route('jurnal.destroy', $item->id) }}" method="POST">
                                    <a href="{{ route('jurnal.show', $item->id) }}" class="btn btn-sm btn-secondary">
                                        <i class="fas fa-eye"></i> Show
                                    </a>
                                    <a href="{{ route('jurnal.edit', $item->id) }}" class="btn btn-sm btn-primary">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Tambahkan FontAwesome untuk ikon -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
