<?php 
include "../connect.php";
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
try {
    //code...
    $nama = $_POST['first_nama'];
    $last = $_POST['last_nama'];
    $username = $_POST ['username'];
    $pass = md5($_POST ['pass']);

    echo $nama." ".$username." ",$pass;

    $sql = "INSERT INTO user (username, password, nama, role) VALUES ('$username','$pass','$nama','mahasiswa')";
    $result = $link->prepare($sql);
    $result->execute();
    echo "berhasil harusnya";
    header('location:../index.php?module=home');
} catch (PDOException $e) {
    echo $e->getMessage();    
}
// ?>
// <button><a href="../login.php">Kembali</a></button> 
// <?php 
//         if ($_GET['module'] == 'home') {
//           include "pages/home.php"; 
//         } elseif ($_GET['module'] == 'alternatif'){
//           include "pages/alternatif.php";
//         } elseif ($_GET['module'] == 'pendaftaran'){
//           include "pages/pendaftaran.php";
//         } elseif ($_GET['module'] == 'persyaratan'){
//           include "pages/persyaratan.php";
//         } elseif ($_GET['module'] == 'hasil'){
//           include "pages/hasil.php";
//         } elseif ($_GET['module'] == 'upload'){
//           include "pages/upload.php";
//         } elseif ($_GET['module'] == 'laporan'){
//           include "pages/laporan.php";
//         } elseif ($_GET['module'] == 'kriteria'){
//           include "pages/kriteria.php";
//         } elseif ($_GET['module'] == 'about'){
//           include "pages/about.php";
//         } elseif ($_GET['module'] == 'login'){
//             include "login.php";
//         } else {
//           include "pages/home.php";
//         }      
//       ?>
