<?php
include 'koneksi.php';

if(isset($_POST['submit'])) {
    // Mendapatkan nilai yang dikirimkan melalui form
    $idabout = $_POST['ids'];
    $totalusers = $_POST['name']; // disesuaikan dengan name input
    $tahun = $_POST['keterangan']; // disesuaikan dengan name input
    $ulasan = $_POST['ulasan']; // disesuaikan dengan name input

    // Query untuk mengupdate data about
    $query = "UPDATE about SET totalusers='$totalusers', tahun='$tahun', ulasan='$ulasan' WHERE idabout='$idabout'";
    
    // Melakukan update data
    $result = mysqli_query($koneksi, $query);

    if($result) {
        // Jika update berhasil, redirect ke halaman Adminsarana.php atau halaman lain yang sesuai
        header("Location: Adminsarana.php");
        exit;
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($koneksi);
        exit; // Keluar dari skrip jika terjadi kesalahan
    }
} else {
    echo "Aksi tidak valid.";
    exit; // Keluar dari skrip jika aksi tidak valid
}
?>

