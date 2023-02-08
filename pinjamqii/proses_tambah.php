<?php
include("koneksi.php");
if(isset($_POST['tambah'])){
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
    
    $sql="INSERT INTO tb_montor(nomor_angka, merek, jenis_montor, tahun_montor, tanggal_pinjam, tanggal_kembali) VALUES ($nomor_angka, $merek, $jenis_montor, $tahun_montor, $tanggal_pinjam, $tanggal_kembali)"; 
    $query=mysqli_query($koneksi,$sql);

    $sql="SELECT max(id_montor) AS montor_id FROM tb_montor LIMIT 1";
    $query=mysqli_query($koneksi,$sql);

    $data=mysqli_fetch_array($query);
    $id_montor=$data['montor_id'];

    $sql="INSERT INTO tb_peminjam(nama_peminjam, alamat, umur, keperluan, jaminan, id_montor ) VALUES ('$nama_peminjam', '$alamat', '$umur', '$keperluan', '$jaminan','$id_montor')";
    $query=mysqli_query($koneksi,$sql);


    if($query){
        header('location:lihat_data.php?status=sukses');
    }else{
        header('location:lihat_data.php?status=gagal');
    }
}
?>