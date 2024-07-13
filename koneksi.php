<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "siakad";

    $koneksi = mysqli_connect($servername, $username, $password, $dbname);
    if (!$koneksi){
            die("Connection Failed:".mysqli_connect_error());
        }
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "siakad";

    // // Create connection
    // $koneksi = mysqli_connect($servername, $username, $password, $dbname);

    // // Check connection
    // if (!$koneksi) {
    //     die("Connection failed: " . mysqli_connect_error());
    // }

    // // Your query
    // $sql = "SELECT * FROM your_table"; // Replace 'your_table' with your actual table name

    // // Execute the query
    // $nquery = mysqli_query($koneksi, $sql);

    // // Check if query execution was successful
    // if (!$nquery) {
    //     die("Query failed: " . mysqli_error($koneksi));
    // }
?>