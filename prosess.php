<?php
// Include the database configuration file
include ("Configg.php");

// Insert the data into the table
if (isset($_POST['submit'])){
$id_barang = $_POST['id_barang'];
$merk = $_POST['merk'];
$warna = $_POST['warna'];
$jumlah = $_POST['jumlah'];

$sql = "INSERT INTO inventory (id_barang, merk, warna, jumlah)
        VALUES ('$id_barang', '$merk', '$warna', '$jumlah')";
        $query = mysqli_query ($db, $sql);

        if($query){
            header('Location: output.php?status=berhasil');
        } else{
            header('Location: output.php?status=gagal');
        }
    } else{
        die("Akses diblokir");
    }
?>