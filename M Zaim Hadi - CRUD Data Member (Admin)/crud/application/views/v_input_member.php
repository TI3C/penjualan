<html>
    <head>
        <title>DATA MEMBER</title>
    </head>
    <body>
        <table>
  
            <tbody>
                <h2><?php echo $type;?></h2>
    <?php echo form_open('data_member/post'); ?>
    <?php if ($type=="EDIT"){ 
     echo form_hidden('Id', $this->input->get('member'));
     }
     ?>
                        <tr>
    <td>Nama</td>
    <td><input type="text" name="Nama" value="<?php if ($type=="EDIT"){echo $member[0]->Nama;};?>"></td>
   </tr>
   <tr>
    <td>Alamat</td>
    <td><input type="text" name="Alamat" value="<?php if ($type=="EDIT"){echo $member[0]->Alamat;};?>"></td>
   </tr>
   <tr>
    <td>Keterangan</td>
    <td><input type="text" name="Keterangan" value="<?php if ($type=="EDIT"){echo $member[0]->Keterangan;};?>"></td>
   </tr>
   <tr>
    <td></td>
    <td><input type="submit" name="simpan" value="<?php echo $type;?>"></td>
   </tr>
   <?php echo form_close();?>
            </tbody>
        </table>
    </body>
</html>