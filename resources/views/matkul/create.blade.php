@include('layout.header')
<h3>Tambah Matkul</h3>
<form action="{{ route('matkul.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="kode">Kode Matkul:</label>
        <input type="text" name="kode" id="kode" placeholder="Masukkan kode Matkul">
    </div>
    <div class="form-group">
        <label for="nama">Nama Matkul:</label>
        <input type="text" name="nama" id="nama" placeholder="Masukkan nama Matkul">
    </div>
    <div class="form-group">
        <label for="tahun_kurikulum">Tahun Kurikulum:</label>
        <input type="text" name="tahun_kurikulum" id="tahun_kurikulum" placeholder="Masukkan tahun kurikulum">
    </div>
    <div class="form-group">
        <label for="">Nama Dosen:</label>
        <select name="dosen_id" id="">
            @foreach($dosen as $d)
                <option value="{{ $d->id }}">{{ $d->nama_dosen }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Nama Ruangan:</label>
        <select name="ruangan_id" id="">
            @foreach($ruangan as $r)
                <option value="{{ $r->id }}">{{ $r->nama_ruangan }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Gambar Referensi</label>
        <input type="file" name="file_referensi" id="">
    </div>
    <button type="submit" class="tombol">Submit</button>
</form>
@include('layout.footer')
