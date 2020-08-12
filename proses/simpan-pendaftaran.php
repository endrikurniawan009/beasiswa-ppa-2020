<?php
include "../connect.php";

try {
    print_r($_POST);
    $nama_lengkap = $_POST['nama_lengkap'];
    $tempat_lahir = $_POST['ttl'];
    $tgl_lahir = $_POST['tanggal'];
    $no_hp = $_POST['nomorhp'];
    $jk = $_POST['jk'];
    $alamat_asal = $_POST['alamat_asal'];
    $nim = $_POST['nim'];
    $smester = $_POST['semester'];
    $fakultas = $_POST['fakultas'];
    $alamat_sekarang = $_POST['alamat_sekarang'];
    if ($_POST['aktif'] === "true")
        echo $aktif = TRUE;
    else
        echo $aktif = FALSE;
    
    $nama_ayah = $_POST['nama_ayah'];
    $umur_ayah = $_POST['umur_ayah'];
    $pekerjaan_ayah = $_POST['pekerjaan_ayah'];
    $status_ayah = $_POST['button1'];
    $alamat_ayah = $_POST['alamat_ayah'];
    $nama_ibu = $_POST['nama_ibu'];
    $umur_ibu = $_POST['umur_ibu'];
    $pekerjaan_ibu = $_POST['pekerjaan_ibu'];
    $status_ibu = $_POST['button'];
    $alamat_ibu = $_POST['alamat_ibu'];

    $nama_organisasi = $_POST['nama_organisasi'];
    $jabatan = $_POST['jabatan'];
    $aktivitas = $_POST['aktifitas'];

    $penghargaan = $_POST['penghargaan'];
    $tahun = $_POST['tahun'];
    $akdeskripsi_penghargaan = $_POST['deskripsi'];

    $sql = "INSERT INTO mahasiswa
            (nama_lenkap, tempat_lahir, tgl_lahir, no_hp, jk, alamat_asal, nim, smester, fakultas, alamat_sekarang, aktif, nama_ayah, umur_ayah, pekerjaan_ayah, status_ayah, alamat_ayah, nama_ibu, umur_ibu, pekerjaan_ibu, status_ibu, alamat_ibu) VALUES
            ('$nama_lengkap', '$tempat_lahir', '$tgl_lahir', '$no_hp', '$jk', '$alamat_asal', '$nim', '$smester', '$fakultas', '$alamat_sekarang', '$aktif', '$nama_ayah', '$umur_ayah', '$pekerjaan_ayah', '$status_ayah', '$alamat_ayah', '$nama_ibu', '$umur_ibu', '$pekerjaan_ibu', '$status_ibu', '$alamat_ibu')";
    echo $sql;
    $result = $link->prepare($sql);
    $result->execute();
    $last_id = $link->lastInsertId();

    $sql = "INSERT INTO organisasi (id_mahasiswa, nama_organisasi, jabatan, aktivitas)
                        VALUES  ('$last_id', '$nama_organisasi', '$jabatan', '$aktivitas')";
    $result = $link->prepare($sql);
    $result->execute();

    $sql = "INSERT INTO prestasi (id_mahasiswa, penghargaan, tahun, deskripsi_penghargaan)
                        VALUES  ('$last_id', '$penghargaan', '$tahun', '$akdeskripsi_penghargaan')";
    $result = $link->prepare($sql);
    $result->execute();

    echo "New record created successfully. Last inserted ID is: " . $last_id;
    header('location:../index.php?module=home');
} catch (PDOException $e) {
    echo $e->getMessage();    
}