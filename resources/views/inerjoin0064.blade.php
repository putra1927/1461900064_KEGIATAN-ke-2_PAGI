<!DOCTYPE html>
<html>
<head>
<title>1461900064-Putra Dwi Andrianto</title>
</head>
<body>
<p>Cari Buku :</p>
<form action="/inerjoin/cari" method="GET">
<input type="text" name="lihat" placeholder="Cari buku .." value="{{ old('cari') }}">
<input type="submit" value="CARI">
</form>
<h2>putra</h2>
<h3>Data Buku</h3>
<table border="1">
<tr>
<th>Kode Buku</th>
<th>kode penerbit</th>
<th>judul buku</th>
<th>jumlah buku</th>
<th>nama kategori</th>

</tr>
@foreach($ms_buku as $p)
<tr>
<td>{{ $p->kode_buku }}</td>
<td>{{ $p->kode_penerbit }}</td>
<td>{{ $p->judul_buku }}</td>
<td>{{ $p->jumlah_buku }}</td>
<td>{{ $p->nama_kategori }}</td>
</tr>
@endforeach
</table>
</body>
</html>