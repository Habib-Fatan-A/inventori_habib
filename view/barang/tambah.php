<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah barang</title>
</head>
<body>
    <h1>Tambah barang baru</h1>
    <form action = "simpan.php"method="POST">
        <label for="">ID barang</label>
        <input type="number" name="id_barang">
        <br>
        <label for="">nama barang</label>
        <input type="text" name="nama_barang">
        <br>
        <br>
        <label for="">harga barang</label>
        <input type="text" name="harga_barang">
        <br>
        <br>
        <label for="">stok barang</label>
        <input type="text" name="stok_barang">
        <br>
        <br>
        <label for="">id jenis</label>
        <input type="text" name="id_jenis">
        <br>
        <button type="submit">simpan</button>
 </form>
</body>
</html>