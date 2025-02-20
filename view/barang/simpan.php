<?php
$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$harga_barang = $_POST['harga_barang'];
$stok_barang = $_POST['stok_barang'];
$id_jenis = $_POST['id_jenis'];

include '../../config/koneksi.php';

$query = mysqli_query($conn,"INSERT INTO barang
VALUES('$id_barang','$nama_barang','$harga_barang','$stok_barang','$id_jenis')");
if($squery){
    echo "<script>alert('tambah berhasil')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else{
    echo "<script>alert('tambah berhasil')</script>";
    echo "<script>window.location.href='tambah.php'</script>";
}