
<h3>Edit Data</h3>
<form action="{{ route('jurnal.update', $jurnal->id) }}" method="post">
    @csrf
    @method('put')
    <table>
        <tr>
            <td>Transaksi Id</td><td><input type="text" name="TransaksiId" value="{{ $jurnal->TransaksiId }}"></td>
        </tr>
        <tr>
            <td>Jurnal Kode</td><td><input type="number" name="JurnalKode" value="{{ $jurnal->JurnalKode }}"></td>
        </tr>
        <tr>
            <td>Nomor Perkiraan</td><td><input type="number" name="NomorPerkiraan" value="{{ $jurnal->NomorPerkiraan }}"></td>
        </tr>
        <tr>
            <td>Tanggal Transaksi</td><td><input type="date" name="TanggalTransaksi" value="{{ $jurnal->TanggalTransaksi }}"></td>
        </tr>
        <tr>
            <td>Jenis Transaksi</td><td><input type="text" name="JenisTransaksi" value="{{ $jurnal->JenisTransaksi }}"></td>
        </tr>
        <tr>
            <td>Keterangan</td><td><input type="text" name="Keterangan" value="{{ $jurnal->Keterangan }}"></td>
        </tr>
        <tr>
            <td>Debet</td><td><input type="number" name="Debet" value="{{ $jurnal->Debet }}"></td>
        </tr>
        <tr>
            <td>Kredit</td><td><input type="number" name="Kredit" value="{{ $jurnal->Kredit }}"></td>
        </tr>
        <tr>
            <td>Tanggal Posting</td><td><input type="date" name="tanggal_posting" value="{{ $jurnal->tanggal_posting }}"></td>
        </tr>
        <tr>
            <td>Keterangan Posting</td><td><input type="text" name="keterangan_posting" value="{{ $jurnal->keterangan_posting }}"></td>
        </tr>
        <tr>
            <td>ID User</td><td><input type="number" name="sIdUser" value="{{ $jurnal->sIdUser }}"></td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Simpan">
                <a class="btn btn-sm btn-danger" href="{{ url()->previous() }}" >Back</a>
            </td>
        </tr>
    </table>
</form>
