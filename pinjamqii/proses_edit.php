<?php
include("koneksi.php");
if(isset($_POST['edit'])){
    $id=$_POST['id_peminjam'];
    $nama_peminjam=$_POST['nama_peminjam'];
    $alamat=$_POST['alamat'];
    $umur=$_POST['umur'];
    $keperluan=$_POST['keperluan'];
    $jaminan=$_POST['jaminan'];
    $nomor_angka=$_POST['nomor_angka'];
    $merek=$_POST['merek'];
    $jenis_montor=$_POST['jenis_montor'];
    $tahun_montor=$_POST['tahun_montor'];
    $tanggal_pinjam=$_POST['tanggal_pinjam'];
    $tanggal_kembali=$_POST['tanggal_kembali'];
    $sql = "UPDATE tb_montor SET nomor_angka='$nomor_angka', merek='$merek', jenis_montor='$jenis_montor', tahun_montor='$tahun_montor', tanggal_pinjam= '$tanggal_pinjam', tanggal_kembali= '$tanggal_kembali' WHERE id_montor='$id'";
    $query= mysqli_query($koneksi,$sql);

    $sql = "UPDATE tb_peminjam SET nama_peminjam='$nama_peminjam', alamat='$alamat', umur='$umur', keperluan='$keperluan', jaminan='$jaminan', WHERE id_peminjam='$id'";
    $query= mysqli_query($koneksi,$sql);
    
    if($query){
        header('Location:lihat_data.php');
    }else{
        die ("gagal mengedit");
    }}
?>