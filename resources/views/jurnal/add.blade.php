
<h31>Tambah Data</h3>
<form action="{{ route('jurnal.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <table>
        <tr>
            <td>Transaksi Id</td><td><input type="text" name="TransaksiId"></td>
        </tr>
        <tr>
            <td>Jurnal Kode</td><td><input type="number" name="JurnalKode"></td>
        </tr>
        <tr>
            <td>No Perkiraan</td><td><input type="number" name="NomorPerkiraan"></td>
        </tr>
        <tr>
            <td>Tanggal Transaksi</td><td><input type="date" name="TanggalTransaksi"></td>
        </tr>     
        <tr>
            <td>Jenis Transaksi</td><td><input type="text" name="JenisTransaksi"></td>
        </tr>      
        <tr>
            <td>Keterangan</td><td><input type="text" name="Keterangan"></td>
        </tr>    
        <tr>
            <td>Debet</td><td><input type="number" name="Debet"></td>
        </tr>
        <tr>
            <td>Kredit</td><td><input type="number" name="Kredit"></td>
        </tr>
        <tr>
            <td>Tanggal Posting</td><td><input type="date" name="tanggal_posting"></td>
        </tr>
        <tr>
            <td>Keterangan Posting</td><td><input type="text" name="keterangan_posting"></td>
        </tr>
        <tr>
            <td>Id User</td><td><input type="number" name="sIdUser"></td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Simpan">
                <a class="btn btn-sm btn-danger" href="{{ url()->previous() }}" >Back</a>
            </td>
        </tr>
    </table>
</form>

