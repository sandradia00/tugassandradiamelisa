@extends('layout.main')
@section('content')
        <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Data kelompok</h5>
            <a href="{{ route('kelompok.create') }}" class="btn btn-success btn-sm">Tambah Data</a>
        </div>

        <div class="card-body">
            <table class="table table-sm table-striped table-hover table-bordered">
                <thead class="bg-dark text-white">
                    <tr>
                        <th>Kelompok</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kelompok as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->Kelompok }}</td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" 
                                      action="{{ route('kelompok.destroy', $item->id) }}" method="POST">
                                    <a href="{{ route('kelompok.show', $item->id) }}" class="btn btn-sm btn-secondary">
                                        <i class="fas fa-eye"></i> Show
                                    </a>
                                    <a href="{{ route('kelompok.edit', $item->id) }}" class="btn btn-sm btn-primary">
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

@endsection