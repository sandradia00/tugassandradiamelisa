
<h31>Tambah Data</h3>
<form action="{{ route('periode.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <table>
    <tr>
            <td>Periode</td><td><input type="number" name="Periode"></td>
        </tr>
        <tr>
            <td>Tanggal Mulai</td><td><input type="date" name="Tanggal_Mulai"></td>
        </tr>
        <tr>
            <td>Tanggal Selesai</td><td><input type="date" name="Tanggal_Selesai"></td>
        </tr>  
        <tr>
            <td>Keterangan</td><td><input type="text" name="Keterangan"></td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Simpan">
                <a class="btn btn-sm btn-danger" href="{{ url()->previous() }}" >Back</a>
            </td>
        </tr>
    </table>
</form>

