<h1 class="text-center my-3">Master periode</h1>

<div class="container">
    <div class="card shadow-lg">
        <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Data periode</h5>
            <a href="{{ route('periode.create') }}" class="btn btn-success btn-sm">Tambah Data</a>
        </div>

        <div class="card-body">
            <table class="table table-sm table-striped table-hover table-bordered">
                <thead class="bg-dark text-white">
                    <tr>
                        <th>No</th>
                        <th>Periode</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($periode as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->Periode }}</td>
                            <td>{{ $item->Tanggal_Mulai }}</td>
                            <td>{{ $item->Tanggal_Selesai }}</td>
                            <td>{{ $item->Keterangan }}</td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" 
                                      action="{{ route('periode.destroy', $item->id) }}" method="POST">
                                    <a href="{{ route('periode.show', $item->id) }}" class="btn btn-sm btn-secondary">
                                        <i class="fas fa-eye"></i> Show
                                    </a>
                                    <a href="{{ route('periode.edit', $item->id) }}" class="btn btn-sm btn-primary">
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
