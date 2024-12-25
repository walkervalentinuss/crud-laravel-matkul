@include('layout.header')
<h3>Edit Matkul</h3>
<form action="{{ route('matkul.update', $matkul->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="kode">Kode Matkul:</label>
        <input type="text" name="kode" id="kode" value="{{ $matkul->kode }}">
    </div>
    <div class="form-group">
        <label for="nama">Nama Matkul:</label>
        <input type="text" name="nama" id="nama" value="{{ $matkul->nama }}">
    </div>
    <div class="form-group">
        <label for="tahun_kurikulum">Tahun Kurikulum:</label>
        <input type="text" name="tahun_kurikulum" id="tahun_kurikulum" value="{{ $matkul->tahun_kurikulum }}">
    </div>
    <div class="form-group">
        <label for="">Nama Dosen:</label>
        <select name="dosen_id" id="">
            @foreach($dosen as $d)
                <option value="{{ $d->id }}" {{ ($d->id==$matkul->dosen_id) ? 'selected':'' }}>{{ $d->nama_dosen }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Nama Ruangan:</label>
        <select name="ruangan_id" id="">
            @foreach($ruangan as $r)
                <option value="{{ $r->id }}" {{ ($r->id==$matkul->ruangan_id) ? 'selected':'' }}>{{ $r->nama_ruangan }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Gambar Referensi</label>
        @if ($matkul->referensi)
            <img src="{{ asset('storage/' . $matkul->referensi) }}" alt="Referensi Lama" width="90">
        @endif
        <input type="file" name="file_referensi" id="">
    </div>
    <input type="hidden" name="referensi_lama" value="{{ $matkul->referensi }}">
    <button type="submit" class="tombol">Update</button>
</form>
@include('layout.footer')