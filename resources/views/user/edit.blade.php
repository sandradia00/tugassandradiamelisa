@extends('layout.main')
@section('content')
<h3>Edit Data</h3>
<form action="{{ route('user.update', $user->id) }}" method="post">
    @csrf
    @method('put')
    <table>
        <tr>
            <td>Id User</td><td><input type="number" name="Id_User" value="{{ $user->Id_User }}"></td>
        </tr>
        <tr>
            <td>Nama User</td><td><input type="text" name="Nama_User" value="{{ $user->Nama_User }}"></td>
        </tr>
        <tr>
            <td>Password</td><td><input type="number" name="Password" value="{{ $user->Password }}"></td>
        </tr>
        <tr>
            <td>Level</td><td><input type="text" name="Level" value="{{ $user->Level }}"></td>
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