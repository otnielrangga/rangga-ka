<?php
    include("konfigurasi01.php");

    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS);
    
    if($cnn){
        echo "koneksi sukse";
        $sql1 = "
        CREATE DATABASE " . DBNAME;

        $hasil = mysqli_query($cnn, $sql1);

        if($hasil){
            echo "database " . DBNAME . " berhasil dibuat";
        }else{
            echo "database " . DBNAME . " gagal dibuat";
        }

    }else{
        echo "koneksi gagal<br>" .mysqli_connect_erroe();
    }