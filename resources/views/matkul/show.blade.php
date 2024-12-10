@include('layout.header')
<h3>Detail Matkul</h3>
<table>
    <tbody>
            <tr>
                <td width="150px">Kode Mata Kuliah</td>
                <td width="2px">:</td>
                <td>{{ $matkul->kode }}</td>
            </tr>
            <tr>
                <td width="150px">Nama Mata Kuliah</td>
                <td width="2px">:</td>
                <td>{{ $matkul->nama }}</td>
            </tr>
            <tr>
                <td width="150px">Tahun Kurikulum</td>
                <td width="2px">:</td>
                <td>{{ $matkul->tahun_kurikulum }}</td>
            </tr>
            <tr>
                <td width="150px">Dosen Pengampu</td>
                <td width="2px">:</td>
                <td>{{ $matkul->dosen->nama_dosen }}</td>
            </tr>
            <tr>
                <td width="150px">Ruangan</td>
                <td width="2px">:</td>
                <td>{{ $matkul->ruangan->nama_ruangan }}</td>
            </tr>
    </tbody>
</table>
@include('layout.footer')
