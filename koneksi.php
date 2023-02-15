<?php

$koneksi = mysqli_connect('localhost','root','','db_ukk_spp');

if(!$koneksi){
    echo"koneksi gagal";
}
