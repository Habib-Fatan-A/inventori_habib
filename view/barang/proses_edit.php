<?php 

$id_jenis=$_GET['Id_jenis'];
$nama_jenis=$_POST['nama_jenis'];

include '../../config/koneksi.php';

$query=mysqli_query($conn, "UPDATE jenis SET nama_jenis='nama_jenis'
WHERE id_jenis='$id_jenis'");

if($query){
    echo  "<script>alert('edit jenis berhasil cuy!')</script>";
    echo "<script>window.location.href='index.php'</script>";

}else{
    echo "<script>alert('Edit jenis berhasil cu</script>";
    echo "<script>window.location.href+'view_tambah.php'</script>";
}