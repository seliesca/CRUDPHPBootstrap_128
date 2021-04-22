<?php
//koneksi ke database("merupakan password phpmyadmin)
$koneksi = mysqli_connect("localhost","root","","id");

//cek koneksi ke database
//apabila error
if (mysqli_connect_error()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}