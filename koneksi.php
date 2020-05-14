<?php
    $db_host = "127.0.0.1:3306"; //host database
    $db_username = "root"; //username database
    $db_password = "Admin-54321"; //pass database
    $db_name = "profile";
  
    $koneksi = new mysqli($db_host, $db_username, $db_password, $db_name); //membuat koneksi ke server mysql 
    
    //buat logic dengan if
    if ($koneksi->connect_error){
        die("Koneksi ke database gagal ");
    } 
?>