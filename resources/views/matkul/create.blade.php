@include('layout.header')
<h3>Tambah Matkul</h3>
<form action="{{ route('ruangan.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="nama_dosen">Nama Ruangan:</label>
        <input type="text" name="nama_ruangan" id="nama_ruangan" placeholder="Masukkan nama Ruangan">
    </div>
    <button type="submit" class="tombol">Submit</button>
</form>
@include('layout.footer')
