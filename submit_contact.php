<?php
    require 'index.html';

    // Pastikan formulir sudah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $pesanan = $_POST["pesanan"];
        $no_hp = $_POST["no_hp"];
        $jumlah_pesenan = $_POST["jumlah_pesenan"];
        $total_harga = $_POST["total_harga"];

        // Buat dan jalankan query SQL untuk memasukkan data ke database
        $query_sql = "INSERT INTO kopi (nama, pesanan, no_hp, jumlah_pesenan,total_harga) 
                    VALUES ('$nama','$pesanan', '$no_hp', '$jumlah_pesenan','$total_harga)";
        if(isset($_POST['pesan'])){
            $nama = $_POST["nama"];
        $pesanan = $_POST["pesanan"];
        $no_hp = $_POST["no_hp"];
        $jumlah_pesenan = $_POST["jumlah_pesenan"];
        $total_harga = $_POST["total_harga"];
        
        $cekdatabase = mysqli_query($conn, "SELECT * FROMkopi where nama='$nama' and pesanan='$pesanan'and no_hp='$no_hp'and jumlah_pesenan='$jumlah_pesenan'and total_harga='$total_harga'");
        }

    }

?>
