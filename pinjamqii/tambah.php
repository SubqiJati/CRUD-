<!DOCTYPE html>
<html lang="en">
<head>  
<title>From mapel</title>
</head>
<body>
<center>
    <header>
    <h1>From Montor</h1>
</header>
    <form action="proses_tambah.php" method="POST">
        <form>
            <fieldset>
                <p>
                    <label for="nama_peminjam">Nama  : </label>
                    <input type="text" name="nama_peminjam" />
</p>
                <p>
                    <label for="alamat">Alamat : </label>
                    <textarea name="alamat" row="5"></textarea>  
</p>
                <p>
                    <label for="umur">Umur : </label>
                    <input type="number" name="umur"/>
</p>
<p>
                    <label for="keperluan">Keperluan : </label>
                    <input type="text" name="keperluan" />
</p>
<p>
                    <label for="jaminan">Jaminan : </label>
                    <input type="text" name="jaminan" />
</p>
<p>
                    <label for="nomor_angka">Nomor Rangka : </label>
                    <input type="number" name="nomor_angka" />
</p>
<p>
                    <label for="merek">Merek : </label>
                    <input type="text" name="merek" />
</p>
<p>
                    <label for="jenis_montor">Jenis Montor : </label>
                    <input type="text" name="jenis_montor" />
</p>
<p>
                    <label for="tahun_montor">Tahun Montor : </label>
                    <input type="number" name="tahun_montor" />
</p>
<p>
                    <label for="tanggal_pinjam">Tanggal Pinjam : </label>
                    <input type="date" name="tanggal_pinjam" />
</p>
<p>
                    <label for="tanggal_kembali">Tanggal Kembali : </label>
                    <input type="date" name="tanggal_kembali" />
</p>
                <p>
                    <input type="submit" value="Tambah" name="tambah" />
</p>
</center>
</fieldset>
<form>
</body>
</html>