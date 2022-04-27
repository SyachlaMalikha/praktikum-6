<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
include "waktu.php";

if(empty ($nama)||empty ($email)){
    header('Location:gagal.php');
}else{
    echo "Nama: $nama"."<br>";
       echo "Email: $email;"."<br>";
      echo "Terakhir login: $waktu $tanggal";
}
