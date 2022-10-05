<?php
include("koneksi.php");
isset($_GET['id']);
$kode = $_GET['id'];
$sql = "DELETE FROM barang where id=$kode";
$query = mysqli_query($db, $sql);

if($query){
    header("Location:barang.php?status=sukses");
} else {
    die ("akses dilarang");
}
?>