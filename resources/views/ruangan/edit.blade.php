@include('layout.header')
<h3>Edit Ruangan</h3>
<form action="{{ route('ruangan.update', $ruangan->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nama_ruangan">Nama Ruangan:</label>
        <input type="text" name="nama_ruangan" id="nama_ruangan" value="{{ $ruangan->nama_ruangan }}">
    </div>
    <button type="submit" class="tombol">Update</button>
</form>
@include('layout.footer')