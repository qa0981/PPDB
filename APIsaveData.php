<?php
    include 'koneksi.php';

        $no_reg = $_POST['no_reg'];
        $nama_mhs= $_POST['nama_mhs'];
        $jenis_kelamin= $_POST['jenis_kelamin'];
        $bidikmisi= $_POST['bidikmisi'];
        $asal_sekolah= $_POST['asal_sekolah'];
        $pilihan1= $_POST['pilihan1'];
        $pilihan2= $_POST['pilihan2'];
        $rank_sekolah= $_POST['rank_sekolah'];
        $nilai_un= $_POST['nilai_un'];


    $query = mysqli_query($koneksi, "INSERT INTO ppdb_mhs (no_reg,nama_mhs,jenis_kelamin,bidikmisi,asal_sekolah,pilihan1,pilihan2,rank_sekolah,nilai_un) VALUES ('$no_reg', '$nama_mhs', '$jenis_kelamin', '$bidikmisi', '$asal_sekolah', '$pilihan1', '$pilihan2', '$rank_sekolah', '$nilai_un')") or die(mysqli_error($koneksi));

    if($query) {
        echo "<script>alert('Data berhasil ditambahkan!');window.location='index.php';</script>";
    } else {
        echo "<script>alert('Data gagal ditambahkan');</script>";
    }

    mysqli_close($koneksi);
    
?>