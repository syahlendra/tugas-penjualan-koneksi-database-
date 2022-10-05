<html>
    <head></head>
    <body>
        <h1>Form Tambah Barang</h1>
        <form action="proses-tambah.php" method="POST">

<fieldset>

<p>
            <label for="nama">Nama Barang : </label>
            <input type="text" name="nama" />
        </p>
        <p>
            <label for="stok">Stok Barang : </label>
            <input type="number" name="stok" />
        </p>
        <p>
            <label for="harga">Harga Barang : </label>
            <input type="text" name="harga" />
        </p>
        <p>
            <input type="submit" value="Tambah Barang" name="tambah" />
        </p>

        </fieldset>

    </form>
    </body>
</html>