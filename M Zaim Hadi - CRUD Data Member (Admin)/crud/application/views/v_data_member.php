<html>
    <head>
        <title>CRUD CodeIgniter</title>
    </head>
    <style>
        th,td,table,thead,tbody,tr{
            border:1px solid #000;
        }
    </style>
    <body>
   
        <table>
            <thead>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Keterangan</th>
  <th>Kontrol</th>
            </thead>
            <tbody>
                <h2>DATA MEMBER</h2>
  <a href="<?php echo site_url('data_member/input');?>">Tambah</a>
                <?php
$no = 1;
foreach($data_member as $value)
{
                ?>
                <tr>
                    <td><?= $no;?></td>
                    <td><?= $value->Nama;?></td>
                    <td><?= $value->Alamat;?></td>
                    <td><?= $value->Keterangan;?></td>
      <td><a href="<?= site_url("data_member/edit")."?member=".$value->Id;?>">edit</a>|<a href="<?= site_url("data_member/delete")."?member=".$value->Id;?>">delete</a> </td>
                </tr>
                <?php
				$no++;
}
                ?>
            </tbody>
        </table>
    </body>
</html>
