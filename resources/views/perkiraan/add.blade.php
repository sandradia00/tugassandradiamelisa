
<h31>Tambah Data</h3>
<form action="{{ route('perkiraan.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <table>
    <tr>
            <td>Id Perkiraan</td><td><input type="text" name="id_perkiraan"></td>
        </tr>
    <tr>
            <td>No perkiraan</td><td><input type="number" name="no_perkiraan"></td>
        </tr>
        <tr>
            <td>Nama perkiraan</td><td><input type="text" name="nama_perkiraan"></td>
        </tr>
        
        <tr>
            <td>Tipe</td><td><input type="text" name="tipe"></td>
        </tr> 
        <tr>
            <td>Induk</td><td><input type="text" name="induk"></td>
        </tr>             
        <tr>
            <td>Level</td><td><input type="text" name="level"></td>
        </tr> 
        <tr>
            <td>Kelompok</td><td><input type="text" name="kelompok"></td>
        </tr>
        <tr>
            <td>Normal</td><td><input type="text" name="normal"></td>
        </tr>
        <tr>
            <td>Awal Debet</td><td><input type="number" name="awal_debet"></td>
        </tr>
        <tr>
            <td>Awal Kredit</td><td><input type="number" name="awal_kredit"></td>
        </tr>
        <tr>
            <td>Mut Debet</td><td><input type="number" name="mut_debet"></td>
        </tr>
        <tr>
            <td>Mut Kredit</td><td><input type="number" name="mut_kredit"></td>
        </tr>
        <tr>
            <td>Sisa Debet</td><td><input type="number" name="sisa_debet"></td>
        </tr>
        <tr>
            <td>Sisa Kredit</td><td><input type="number" name="sisa_kredit"></td>
        </tr>
        <tr>
            <td>RL Debet</td><td><input type="number" name="rl_debet"></td>
        </tr>
        <tr>
            <td>RL Kredit</td><td><input type="number" name="rl_kredit"></td>
        </tr>
        <tr>
            <td>NRC Debet</td><td><input type="number" name="nrc_debet"></td>
        </tr>
        <tr>
            <td>NRC Kredit</td><td><input type="number" name="nrc_kredit"></td>
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
