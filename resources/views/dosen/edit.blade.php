@include('layout.header')
<h3>Edit Dosen</h3>
<form action="{{ route('dosen.update', $dosen->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nidn">NIDN:</label>
        <input type="text" name="nidn" id="nidn" value="{{ $dosen->nidn }}">

        <label for="nama_dosen">Nama Dosen:</label>
        <input type="text" name="nama_dosen" id="nama_dosen" value="{{ $dosen->nama_dosen }}">
    </div>
    <button type="submit" class="tombol">Update</button>
</form>
@include('layout.footer')