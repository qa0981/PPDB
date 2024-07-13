<?php
    include 'koneksi.php';
    if (!$koneksi) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id_sekolah = mysqli_real_escape_string($koneksi, $_POST['id_sekolah']);
        $nama_sekolah = mysqli_real_escape_string($koneksi, $_POST['nama_sekolah']);
        $rank_sekolah = mysqli_real_escape_string($koneksi, $_POST['rank_sekolah']);
    
        $sql = "INSERT INTO sekolah (id_sekolah,nama_sekolah, rank_sekolah) VALUES ('$id_sekolah', '$nama_sekolah', '$rank_sekolah')";
    
        if (mysqli_query($koneksi, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
        }
    
        mysqli_close($koneksi);
    
        // Redirect back to the original page after submission
        header("Location: sekolah.php"); // Ganti index.php dengan halaman tujuan Anda
        exit();
    }    
?>