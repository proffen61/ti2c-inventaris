<?php
include ("Configg.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inventory Table</title>
  <link rel="stylesheet" href="style.css">
</head>
<style>
    <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inventory Table</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th,
    td {
      padding: 15px;
      text-align: left;
      border-bottom: 1px solid #dddddd;
    }

    tr:hover {background-color: #f5f5f5;}

    .custom-button {
      display: block;
      margin: 0 auto;
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      text-decoration: none;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin-top: 20px;
    }
  </style>
</head>
</style>
<body>
  <h1>Inventory List</h1>
  <table>
    <thead>
      <tr>
        <th>id barang</th>
        <th>merk</th>
        <th>warna</th>
        <th>jumlah</t>
      </tr>
    </thead>
    <tbody>
    <?php
                $sql = "SELECT * FROM inventory";
                $query = mysqli_query($db, $sql);

                while ($barang = mysqli_fetch_array($query)) {
                    echo "<tr>";

                    echo "<td>" . $barang['id_barang'] . "</td>";
                    echo "<td>" . $barang['merk'] . "</td>";
                    echo "<td>" . $barang['warna'] . "</td>";
                    echo "<td>" . $barang['jumlah'] . "</td>";

                    echo "<td>";
                    echo "</td>";

                    echo "</tr>";
                }
                ?>
    </tbody>
  </table>
        <button class="custom-button" type="button" name="kembali" onclick="location.href='formm.php'">Kembali ke Form</button>
</body>
</html>