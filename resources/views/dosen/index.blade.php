@include('layout.header')
<h3>Dosen</h3>
{{-- Tombol ini akan mengarah ke route dosen.create di DosenController --}}
<a href="{{ route('dosen.create') }}" class="tombol">Tambah</a>
<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>NIDN</th>
            <th>Nama Dosen</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($allDosen as $key => $r)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $r->nidn }}</td>
                <td>{{ $r->nama_dosen }}</td>
                <td>
                    <form action="{{ route('dosen.destroy', $r->id) }}" method="POST">
                        <a href="{{ route('dosen.show', $r->id) }}" class="tombol">Detail</a>
                        <a href="{{ route('dosen.edit', $r->id) }}" class="tombol">Edit</a>
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
