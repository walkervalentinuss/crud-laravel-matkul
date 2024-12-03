@include('layout.header')
<h3>Tambah Dosen</h3>
<form action="{{ route('dosen.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="nidn">NIDN:</label>
        <input type="text" name="nidn" id="nidn" placeholder="Masukkan NIDN Dosen">
        
        <label for="nama_dosen">Nama Dosen:</label>
        <input type="text" name="nama_dosen" id="nama_dosen" placeholder="Masukkan nama Dosen">
    </div>
    <button type="submit" class="tombol">Submit</button>
</form>

@include('layout.footer')
