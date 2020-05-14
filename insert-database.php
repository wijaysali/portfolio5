<?php
    include "koneksi.php";

    $sql = "INSERT INTO user(
        id,
        nama,
        role,
        availability,
        age,
        location,
        years_experience,
        emails
    ) VALUE 
    (
        '1',
        'Hacktiv8',
        'Frontend Developer',
        'Full Time',
        '20',
        'Jakarta',
        '2',
        'email@gmail.com'
    )";

        if($koneksi->query($sql) == TRUE){
            echo "Insert data telah berhasil";
        }else{
            echo "Insert data gagal";
        }
?>