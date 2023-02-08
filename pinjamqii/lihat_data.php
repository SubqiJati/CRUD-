<!DOCTYPE html>
<html>
<head>
 <title>montor</title>
 <center>
 <h1>Data Montor</h1>
 <a href="tambah.php"><input type="button" value="Tambah"></a>
</head>

<body>

 <table border="1">
  <tr>
            <th>No</th>
            <th>Nama Peminjam</th>
            <th>Alamat</th>
            <th>Umur</th>
            <th>Keperluan</th>
            <th>Jaminan</th>
            <th>Nomor Rangka</th>
            <th>Merek</th>
            <th>Jenis Montor</th>
            <th>Tahun Montor</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Aksi</th>
  </tr>
  
  <?php
  include "koneksi.php";
  $query = mysqli_query($koneksi, "SELECT * FROM tb_peminjam INNER JOIN tb_montor ON tb_peminjam.id_montor = tb_montor.id_montor");

  $no = 1;
  foreach ($query as $row) :
   ?>

   <tr>
    <td><?= $no++; ['nomor']?></td>
    <td><?= $row['nama_peminjam']; ?></td> 
    <td><?= $row['alamat']; ?></td>
    <td><?= $row['umur']; ?></td>
    <td><?= $row['keperluan']; ?></td>
    <td><?= $row['jaminan']; ?></td>
    <td><?= $row['nomor_angka']; ?></td>
    <td><?= $row['merek']; ?></td>
    <td><?= $row['jenis_montor']; ?></td>
    <td><?= $row['tahun_montor']; ?></td>
    <td><?= $row['tanggal_pinjam']; ?></td>
    <td><?= $row['tanggal_kembali']; ?></td>
    <td>
        <a href="edit.php?id_peminjam=<?= $row['id_peminjam']; ?>">Edit</a>
        <a href="hapus.php?id_peminjam=<?= $row['id_peminjam']; ?>">Hapus</a>
    </td>
   </tr>

  <?php endforeach; ?>

 </table>
</body>
  </center>
</html>