<?php

$conn = mysqli_connect('localhost','root','','inventori_habib');
if(!$conn){
    
    die("Koneksi Gagal".mysqli_connect_error());
}
