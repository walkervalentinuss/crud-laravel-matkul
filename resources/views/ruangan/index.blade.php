@include('layout.header')
<h3>Ruangan</h3>
{{-- Tombol ini akan mengarah ke route ruangan.create di RuanganController --}}
<a href="{{ route('ruangan.create') }}" class="tombol">Tambah</a>
<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Ruangan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($allRuangan as $key => $r)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $r->nama_ruangan }}</td>
                <td>
                    <form action="{{ route('ruangan.destroy', $r->id) }}" method="POST">
                        <a href="{{ route('ruangan.show', $r->id) }}" class="tombol">Detail</a>
                        <a href="{{ route('ruangan.edit', $r->id) }}" class="tombol">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="tombol">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@include('layout.footer')
