
<h3>Edit Data</h3>
<form action="{{ route('perkiraan.update', $perkiraan->id) }}" method="post">
    @csrf
    @method('put')
    <table>
        <tr>
            <td>Id perkiraan</td><td><input type="text" name="id_perkiraan" value="{{ $perkiraan->id_perkiraan }}"></td>
        </tr>
        <tr>
            <td>Nomor perkiraan</td><td><input type="number" name="no_perkiraan" value="{{ $perkiraan->no_perkiraan }}"></td>
        </tr>
        <tr>
            <td>Nama perkiraan</td><td><input type="text" name="nama_perkiraan" value="{{ $perkiraan->nama_perkiraan }}"></td>
        </tr>
        <tr>
            <td>Tipe</td><td><input type="text" name="tipe" value="{{ $perkiraan->tipe }}"></td>
        </tr>
        <tr>
            <td>Induk</td><td><input type="text" name="induk" value="{{ $perkiraan->induk }}"></td>
        </tr>
        <tr>
            <td>Level</td><td><input type="number" name="level" value="{{ $perkiraan->level }}"></td>
        </tr>
        <tr>
            <td>Kelompok</td><td><input type="text" name="kelompok" value="{{ $perkiraan->kelompok }}"></td>
        </tr>
        <tr>
            <td>Normal</td><td><input type="text" name="normal" value="{{ $perkiraan->normal }}"></td>
        </tr>
        <tr>
            <td>Awal Debet</td><td><input type="number" name="awal_debet" value="{{ $perkiraan->awal_debet }}"></td>
        </tr>
        <tr>
            <td>Awal Kredit</td><td><input type="number" name="awal_debet" value="{{ $perkiraan->awal_kredit }}"></td>
        </tr>
        <tr>
            <td>Mut Debet</td><td><input type="number" name="mut_debet" value="{{ $perkiraan->mut_debet }}"></td>
        </tr>
        <tr>
            <td>Mut Kredit</td><td><input type="number" name="mut_kredit" value="{{ $perkiraan->mut_kredit }}"></td>
        </tr>
        <tr>
            <td>Sisa Debet</td><td><input type="number" name="sisa_debet" value="{{ $perkiraan->sisa_debet }}"></td>
        </tr>
        <tr>
            <td>Sisa Kredit</td><td><input type="number" name="sisa_kredit" value="{{ $perkiraan->sisa_kredit }}"></td>
        </tr>
        <tr>
            <td>RL Debet</td><td><input type="number" name="rl_debet" value="{{ $perkiraan->rl_debet }}"></td>
        </tr>
        <tr>
            <td>RL Kredit</td><td><input type="number" name="rl_kredit" value="{{ $perkiraan->rl_kredit }}"></td>
        </tr>
        <tr>
            <td>NRC Debet</td><td><input type="number" name="nrc_debet" value="{{ $perkiraan->nrc_debet }}"></td>
        </tr>
        <tr>
            <td>NRC Kredit</td><td><input type="number" name="nrc_kredit" value="{{ $perkiraan->nrc_kredit }}"></td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Simpan">
                <a class="btn btn-sm btn-danger" href="{{ url()->previous() }}" >Back</a>
            </td>
        </tr>
    </table>
</form>
@endsection