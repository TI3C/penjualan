<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Data Barang</title>
</head>
    <body> 
    <a href="<?=base_url()?>barang/form_tambah_barang/">Tambah Barang</a></br>
        <table width="900" height="29" border="1">
          <tr>
            <td width="20" height="23">No</td>
            <td width="131">Kode Barang</td>
            <td width="140">Nama Barang</td>
            <td width="140">Kategori Barang</td>
            <td width="140">Harga Barang</td>
            <td width="113">Foto Barang</td>
            <td width="92">Stok Barang</td>
            <td width="92">Option</td>
          </tr>
    <?php
        $no=1;
        foreach ($view as $data) {
            echo
            "<tr>
                <td>$no</td>
                <td>".$data['kd_barang']."</td>
                <td>".$data['nama_barang']."</td>
                <td>".$data['jenis_kategori']."</td>
                <td>".$data['harga_barang']."</td>
                <td><img src='".base_url()."upload/".$data['gambar']."' width='100'></td>
                <td>".$data['stok_barang']."</td>
                <td>
                <a href='".base_url()."barang/update_barang/".$data['kd_barang']."'>Edit</a> | <a href='".base_url()."barang/delete_barang/".$data['kd_barang']."'>Delete</a>
                </td>
            </tr>";
            $no++;
        }
    ?>
    </body>
    </table>
</html>