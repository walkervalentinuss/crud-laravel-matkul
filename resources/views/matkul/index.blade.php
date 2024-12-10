@include('layout.header')
<h3>Matkul</h3>
{{-- Tombol ini akan mengarah ke route matkul.create di MatkulController --}}
<a href="{{ route('matkul.create') }}" class="tombol">Tambah</a>
<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Kode Matkul</th>
            <th>Nama Matkul</th>
            <th>Tahun Kurikulum</th>
            <th>Dosen Pengampu</th>
            <th>Ruangan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($allMatkul as $key => $r)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $r->kode }}</td>
                <td>{{ $r->nama }}</td>
                <td>{{ $r->tahun_kurikulum }}</td>
                <td>{{ $r->dosen->nama_dosen }}</td>
                <td>{{ $r->ruangan->nama_ruangan }}</td>
                <td>
                    <form action="{{ route('matkul.destroy', $r->id) }}" method="POST">
                        <a href="{{ route('matkul.show', $r->id) }}" class="tombol">Detail</a>
                        <a href="{{ route('matkul.edit', $r->id) }}" class="tombol">Edit</a>
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
