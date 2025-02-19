<h1 class="text-center my-3">Master Perkiraan</h1>

<div class="container">
    <div class="card shadow-lg">
        <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Data Perkiraan</h5>
            <a href="{{ route('perkiraan.create') }}" class="btn btn-success btn-sm">Tambah Data</a>
        </div>

        <div class="card-body">
            <table class="table table-sm table-striped table-hover table-bordered">
                <thead class="bg-dark text-white">
                    <tr>
                        <th>No</th>
                        <th>ID Perkiraan</th>
                        <th>Nomor Perkiraan</th>
                        <th>Nama Perkiraan</th>
                        <th>Tipe</th>
                        <th>Induk</th>
                        <th>Level</th>
                        <th>Kelompok</th>
                        <th>Normal</th>
                        <th>Awal Debet</th>
                        <th>Awal Kredit</th>
                        <th>Mut Debet</th>
                        <th>Mut Kredit</th>
                        <th>Sisa Debet</th>
                        <th>Sisa Kredit</th>
                        <th>RL Debet</th>
                        <th>RL Kredit</th>
                        <th>NRC Debet</th>
                        <th>NRC Kredit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($perkiraan as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->id_perkiraan }}</td>
                            <td>{{ $item->no_perkiraan }}</td>
                            <td>{{ $item->nama_perkiraan }}</td>
                            <td>{{ $item->tipe }}</td>
                            <td>{{ $item->induk }}</td>
                            <td>{{ $item->level }}</td>
                            <td>{{ $item->kelompok }}</td>
                            <td>{{ $item->normal }}</td>
                            <td>{{ $item->awal_debet }}</td>
                            <td>{{ $item->awal_kredit }}</td>
                            <td>{{ $item->mut_debet }}</td>
                            <td>{{ $item->mut_kredit }}</td>
                            <td>{{ $item->sisa_debet }}</td>
                            <td>{{ $item->sisa_kredit }}</td>
                            <td>{{ $item->rl_debet }}</td>
                            <td>{{ $item->rl_kredit }}</td>
                            <td>{{ $item->nrc_debet }}</td>
                            <td>{{ $item->nrc_kredit }}</td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" 
                                      action="{{ route('perkiraan.destroy', $item->id) }}" method="POST">
                                    <a href="{{ route('perkiraan.show', $item->id) }}" class="btn btn-sm btn-secondary">
                                        <i class="fas fa-eye"></i> Show
                                    </a>
                                    <a href="{{ route('perkiraan.edit', $item->id) }}" class="btn btn-sm btn-primary">
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
