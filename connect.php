<?php

    // konfigurasi koneksi
    $host       =  "us-cdbr-east-02.cleardb.com";
    $dbuser     =  "b033f6bd729981";
    $dbpass     =  "38e39305";
    $port       =  "3306";
    $dbname     =  "heroku_00d63329e901760";
    // script koneksi php mysql
    $link = new PDO("mysql:dbname=$dbname;host=$host", $dbuser, $dbpass); 
    if(!$link){
        echo "Gagal melakukan Koneksi";
    }
?>