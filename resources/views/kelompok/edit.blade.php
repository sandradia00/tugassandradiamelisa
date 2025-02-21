@extends('layout.main')
@section('content')
<h3>Edit Data</h3>
<form action="{{ route('kelompok.update', $kelompok->id) }}" method="post">
    @csrf
    @method('put')
    <table>
        <tr>
            <td>Kelompok</td><td><input type="text" name="Kelompok" value="{{ $kelompok->Kelompok }}"></td>
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