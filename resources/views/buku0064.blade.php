<!DOCTYPE html>
<html>
<head>
<title>1461900064-Putra Dwi Andrianto</title>
</head>
<body>
<p>Cari Buku :</p>
<form action="/buku/cari" method="GET">
<input type="text" name="lihat" placeholder="Cari buku .." value="{{ old('cari') }}">
<input type="submit" value="CARI">
</form>
<h2>putra</h2>
<h3>Data Buku</h3>
<table border="1">
<tr>
<th>kode_buku</th>
<th>kode_kategori</th>
<th>kode_penerbit</th>
<th>judul_buku</th>
<th>jumlah_buku</th>
<th>pengarang_buku</th>
<th>tahun_terbit_buku</th>
</tr>
@foreach($ms_buku as $p)
<tr>
<td>{{ $p->kode_buku }}</td>
<td>{{ $p->kode_kategori }}</td>
<td>{{ $p->kode_penerbit }}</td>
<td>{{ $p->judul_buku }}</td>
<td>{{ $p->jumlah_buku }}</td>
<td>{{ $p->pengarang_buku }}</td>
<td>{{ $p->tahun_terbit_buku }}</td>
</tr>
@endforeach
</table>
</body>
</html>
