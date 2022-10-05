<?php
include("koneksi.php");

if(isset($_POST['simpan'])){
	$kode = $_POST['id'];
	$nama = $_POST['nama'];
	$stok = $_POST['stok'];
	$harga = $_POST['harga'];

	$sql = "UPDATE barang SET nama='$nama', stok='$stok', harga='$harga' WHERE id=$kode";
	$query = mysqli_query($db, $sql);

	if( $query ) {
        header('Location: barang.php');
	} else {
		die("Gagal menyimpan perubahan...");
	}
	
} else {
	die("Akses dilarang...");
}

?>