<?php

include("config.php");

if( isset($_GET['id']) ){

    // ambil id dari 
    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM calon_siswa WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // Cek delete query?
    if( $query ){
        header('Location: listSiswa.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>