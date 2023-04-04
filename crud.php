<?php

$conn = mysqli_connect('localhost', 'n1577759_nadia', 'jurnalcrud123', 'n1577759_nadia');

if(isset($_POST['tambahdata'])) {
    $jurnal     = $_POST['jurnal'];
    $penerbit   = $_POST['penerbit'];
    $ilmu       = $_POST['ilmu'];
    $sql = "INSERT INTO `Daftar_Jurnal`(`ID`, `JURNAL`, `PENERBIT`, `ILMU`) VALUES ('', '$jurnal', '$penerbit', '$ilmu')";
    mysqli_query($conn, $sql);
    header("location: index.php");
}

$AmbilData = mysqli_query($conn, "SELECT * FROM Daftar_Jurnal");

if(isset($_POST['ubahdata'])) {
    $id         = $_POST['id'];
    $jurnal     = $_POST['jurnal'];
    $penerbit   = $_POST['penerbit'];
    $ilmu       = $_POST['ilmu'];
    $sql = "UPDATE `Daftar_Jurnal` SET `ID`= '$id',`JURNAL`= '$jurnal',`PENERBIT`= '$penerbit',`ILMU`= '$ilmu' WHERE id = '$id'";
    mysqli_query($conn, $sql);
    header('Location: index.php');
}

if (isset($_POST['hapus'])) {
    $id = $_POST['id']; 
    $query = "DELETE FROM Daftar_Jurnal WHERE ID = '$id'";
    $result = mysqli_query($conn, $query);
    header('Location: index.php');
}

?>