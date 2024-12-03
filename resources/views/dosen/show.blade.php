@include('layout.header')
<h3>Detail Dosen</h3>
<table>
    <tbody>
            <tr>
                <td width="100px">NIDN</td>
                <td width="2px">:</td>
                <td>{{ $dosen->nidn }}</td>
            </tr>
            <tr>
                <td width="100px">Nama Dosen</td>
                <td width="2px">:</td>
                <td>{{ $dosen->nama_dosen }}</td>
            </tr>
    </tbody>
</table>
@include('layout.footer')
