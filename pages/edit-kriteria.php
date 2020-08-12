<?php
    include('kriteria.php');
    $id = $_GET['id'];
    $nama = $_GET['nama_kriteria'];
    $fakultas = $_GET['bobot_kriteria'];
    //query update
    $query = "UPDATE kriteria SET nama_kriteria='$nama_kriteria' , bobot_kriteria='$bobot_kriteria' WHERE id='$id' ";
        if (mysqli_query($connect, $query)) {
        # credirect ke page index
        // header("location:index.php");    
    }
        else{
            echo "ERROR, data gagal diupdate". mysqli_error();
    }
?>