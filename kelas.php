<?php

    // integrasi file koneksi database
    include('koneksi.php');

    // membuat perintah MySQL
    $sql = "SELECT * FROM kelas";
    $hasil = $koneksi->query($sql);

    $jumlah_rows = $hasil->num_rows;

    if($jumlah_rows > 0 ){
        while($row = $hasil->fetch_assoc()){
            echo '
            <div class="p-4 bg-gray-600 my-1 cursos-pointer hover:bg-gray-500 transition">
            <h1 class="text-2xl">'. $row['judul']. ' </h1>
            <p></p>
            </div>
            ';
        }
    }
?>