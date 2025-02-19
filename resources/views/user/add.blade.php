
<h31>Tambah Data</h3>
<form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <table>
    <tr>
            <td>Id User</td><td><input type="number" name="Id_User"></td>
        </tr>
        <tr>
            <td>Nama User</td><td><input type="text" name="Nama_User"></td>
        </tr>
        <tr>
            <td>Password</td><td><input type="number" name="Password"></td>
        </tr>
        <tr>
            <td>Level</td><td><input type="text" name="Level"></td>
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

