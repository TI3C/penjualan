<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Form Tambah Barang</title>
</head>

<body>
<center><h2>Form Tambah Barang</h2></center>
<form action="" method="post" role="form" enctype="multipart/form-data">
<table width="387" border="0" align="center">
  <tr>
    <td width="126">Nama Barang</td>
    <td width="10">:</td>
    <td width="144"><input type="text" name="nama_barang"></td>
  </tr>
   <tr>
    <td width="126">Kategori Barang</td>
    <td width="10">:</td>
    <td width="144">
      <select class="form-control m-bot15" name="kategori_barang">
          <?php
            include "koneksi.php";
            $query =  mysql_query("select * from tbljenispenjualan");
            while ($a = mysql_fetch_array ($query))
            {
              echo "<option value='$a[nama_jenis_jual]'> $a[nama_jenis_jual] </option>";
            }
          ?>
      </select>
    </td>
  </tr>
  <tr>
    <td>Harga Barang</td>
    <td>:</td>
    <td><input type="text" name="harga"></td>
  </tr>
  <tr>
    <td>Stok Barang</td>
    <td>:</td>
    <td><input type="text" name="stok_barang"></td>
  </tr>
  <tr>
    <td>Foto Barang</td>
    <td>:</td>
    <td><input type="file" id="exampleInputFile" name="fupload" value="Pilih Foto"></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td>
        <input type="submit" name="proses_tambah_barang" value="PROSES">
        <input type="reset" value="RESET">
    </td>
  </tr>
</table>
</form>
</body>
</html>