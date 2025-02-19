<h1 class="text-center my-3">Master pegawai</h1>

<div class="container">
    <div class="card shadow-lg">
        <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Data pegawai</h5>
            <a href="{{ route('pegawai.create') }}" class="btn btn-success btn-sm">Tambah Data</a>
        </div>

        <div class="card-body">
            <table class="table table-sm table-striped table-hover table-bordered">
                <thead class="bg-dark text-white">
                    <tr>
                        <th>No</th>
                        <th>Alamat</th>
                        <th>Nama pegawai</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pegawai as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->nama_pegawai }}</td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" 
                                      action="{{ route('pegawai.destroy', $item->id) }}" method="POST">
                                    <a href="{{ route('pegawai.show', $item->id) }}" class="btn btn-sm btn-secondary">
                                        <i class="fas fa-eye"></i> Show
                                    </a>
                                    <a href="{{ route('pegawai.edit', $item->id) }}" class="btn btn-sm btn-primary">
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
