<?php
include("koneksi.php");
if(!isset($_GET['id_peminjam'])){
 header("Location:lihat_data.php?");
}
$id=$_GET['id_peminjam'];
$sql= "SELECT * FROM tb_montor INNER JOIN tb_peminjam ON tb_peminjam.id_montor = tb_montor.id_montor WHERE tb_peminjam.id_peminjam='$id'";
$query = mysqli_query($koneksi,$sql);
$row = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die ("Data tidak ditemukan");
}
?>

<html>
    <head>
</head>
<body>
    <h1>Form Edit</h1>
    <a href="lihat_data.php"><input type="button" value="Kembali"></a>
    <form action="proses_edit.php" method="POST">
                <input type="hidden" name="id_peminjam" value="<?php echo $row['id_peminjam']?>" />
                <p>
        <label for="nama_peminjam"> Nama peminjam : </label>
        <input type="text" name="nama_peminjam" value="<?php echo $row['nama_peminjam']?>" />
    </p>
    <p>
        <label for="alamat"> Alamat : </label>
        <input type="text" name="alamat" value="<?php echo $row['alamat']?>" />
    </p>
    <p>
    <label for="umur"> umur: </label>
        <input type="number" name="umur" value="<?php echo $row['umur']?>" />
    </p>
    <p>
        <label for="keperluan"> keperluan : </label>
        <input type="text" name="keperluan" value="<?php echo $row['keperluan']?>"/>
    </p>
    <p>
        <label for="jaminan"> jaminan : </label>
        <input type="text" name="jaminan" value="<?php echo $row['jaminan']?>"/>
    </p>
    <p>
        <label for="nomor_angka"> nomor_angka : </label>
        <input type="text" name="nomor_angka" value="<?php echo $row['nomor_angka']?>"/>
    </p>
    <p>
        <label for="merek"> merek : </label>
        <input type="text" name="merek" value="<?php echo $row['merek']?>"/>
    </p>
    <p>
        <label for="jenis_montor"> jenis motor : </label>
        <input type="text" name="jenis_montor" value="<?php echo $row['jenis_montor']?>"/>
    </p>
    <p>
    <label for="tahun_montor"> tahun montor: </label>
        <input type="number" name="tahun_montor" value="<?php echo $row['tahun_montor']?>" />
    </p>
    <p>
    <label for="tanggal_pinjam"> tanggal pinjam: </label>
        <input type="date" name="tanggal_pinjam" value="<?php echo $row['tanggal_pinjam']?>" />
    </p>
    <label for="tanggal_kembali"> tanggal kembali: </label>
        <input type="date" name="tanggal_kembali" value="<?php echo $row['tanggal_kembali']?>" />
    </p>
<p>
<input type="submit" value="Edit" name="edit" /> 
</p>
</form>
</body>
</html>