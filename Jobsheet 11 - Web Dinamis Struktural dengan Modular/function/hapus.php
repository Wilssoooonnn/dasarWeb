<?php
session_start();

if (!empty($_SESSION['username'])) {
    require '../config/koneksi.php';
    require '../function/anti_injection.php';
    require '../function/pesan_kilat.php';

    if (!empty($_GET['jabatan'])) {
        $id = anti_injection($koneksi, $_GET['id']);
        $query = "DELETE FROM jabatan WHERE id = '$id'";
        if (mysqli_query($koneksi, $query)) {
            pesan('success', 'Jabatan berhasil dihapus');
        } else {
            pesan('danger', 'Jabatan gagal dihapus karena:' . mysqli_error($koneksi));
        }
        header("Location: ../index.php?page=jabatan");
    }
}
