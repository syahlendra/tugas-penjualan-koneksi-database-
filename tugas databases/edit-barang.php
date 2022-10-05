<?php
include('koneksi.php');
if(!isset($_GET['id'])){
    header('Location:barang.php?');
}
    $kode = $_GET['id'];
    $sql = "SELECT * FROM barang WHERE id=$kode";
    $query = mysqli_query($db, $sql);
    $barang = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query) < 1){
        die ("Data tidak ditemukan");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <h1>FORM EDIT BARANG</h1>
    <form action="proses-edit-barang.php" method="POST">
        <fieldset>
        <input type="hidden" name="id" value="<?php echo $barang['id'] ?>" />
            <p>
			<label for="nama">Nama Barang : </label>
			<input type="text" name="nama" value="<?php echo $barang['nama'] ?>" />
            </p>
            <p>
			<label for="stok">Stok Barang : </label>
			<input type="number" name="stok" value="<?php echo $barang['stok'] ?>" />
            </p>
            <p>
			<label for="harga">Harga Barang : </label>
			<input type="number" name="harga" value="<?php echo $barang['harga'] ?>" />
            </p>
            <p>
                <input type="submit" value = "simpan" name = "simpan" />
            </p>
        </fieldset>
    </form>
</body>
</html>