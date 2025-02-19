
<h31>Tambah Data</h3>
<form action="{{ route('pegawai.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <table>
    <tr>
            <td>Nama pegawai</td><td><input type="text" name="nama_pegawai"></td>
        </tr>
        <tr>
            <td>alamat</td><td><input type="text" name="alamat"></td>
        </tr>
        
        <tr>
            <td>Icon</td><td><input type="file" name="img"></td>
        </tr>               
        <tr>
            <td>
                <input type="submit" value="Simpan">
                <a class="btn btn-sm btn-danger" href="{{ url()->previous() }}" >Back</a>
            </td>
        </tr>
    </table>
</form>

