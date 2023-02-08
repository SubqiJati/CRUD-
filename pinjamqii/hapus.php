<?php
include("koneksi.php");
isset($_GET['simpan']);
$id = $_GET['id_peminjam'];
$sql= "DELETE FROM tb_peminjam where id_peminjam='$id'";
$query = mysqli_query($koneksi, $sql);

$sql= "DELETE FROM tb_montor where id_montor='$id'";
$query = mysqli_query($koneksi, $sql);

if($query){
    header('Location:lihat_data.php?status=sukses');
}else{

    die("akses dilarang");
}
?>