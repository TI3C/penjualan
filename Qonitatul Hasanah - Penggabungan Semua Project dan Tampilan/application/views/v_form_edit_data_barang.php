<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Form Edit Barang</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>bootstrap/css/shop-homepage.css" rel="stylesheet">

    <link href="<?php echo base_url()?>font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

   <?php
      foreach ($view_update as $key) {
    ?>

  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Cilukba Shop</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?=base_url()?>member/data_member/">Data Member</a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>barang/data_barang/">Data Produk</a>
                    </li>
                    <li>
                        <a href="#">Data Order</a>
                    </li>
               </ul>

                <ul class="nav navbar-nav navbar-right">
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                                </li>
                                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="<?=base_url()?>login/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                                </li>
                            </ul>
                    </li>
                 </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <center><h2>Form Edit Data Barang</h2></center>
    <form action="" method="post" role="form" enctype="multipart/form-data">
    <table width="387" border="0" align="center">
      <tr>
        <td width="126">Nama Barang</td>
        <td width="10">:</td>
        <td width="144"><input type="text" name="nama_barang" value="<?php echo $key['nama_barang']?>"></td>
      </tr>
       <tr>
        <td width="126">Kategori Barang</td>
        <td width="10">:</td>
        <?php
        echo "
          <td>
            <select name='kategori_barang'>";
            if ($key['jenis_kategori'] == 'Mainan anak perempuan'){
              echo "<option selected='selected' value='Mainan anak Perempuan'>Mainan anak Perempuan</option>
                <option value='Mainan anak laki-laki'>Mainan anak laki-laki</option>
                <option value='Alat Rumah Tangga'>Alat Rumah Tangga</option>
                <option value='Umum'>Umum</option>";
            }elseif ($key['jenis_kategori'] == 'Mainan anak laki-laki'){
              echo "<option value='Mainan Anak Perempuan'>Mainan Anak Perempuan</option>
                <option selected='selected' value='Mainan anak laki-laki'>Mainan anak laki-laki</option>
                <option value='Alat Rumah Tangga'>Alat Rumah Tangga</option>
                <option value='Umum'>Umum</option>";
            }elseif ($key['jenis_kategori'] == 'Alat Rumah Tangga') {
               echo "<option value='Mainan Anak Perempuan'>Mainan Anak Perempuan</option>
                <option value='Mainan anak laki-laki'>Mainan anak laki-laki</option>
                <option selected='Alat Rumah Tangga'>Alat Rumah Tangga</option>
                <option value='Umum'>Umum</option>";
            }elseif ($key['jenis_kategori'] == 'Umum') {
               echo "<option value='Mainan Anak Perempuan'>Mainan Anak Perempuan</option>
                <option value='Mainan anak laki-laki'>Mainan anak laki-laki</option>
                <option value='Alat Rumah Tangga'>Alat Rumah Tangga</option>
                <option selected='Umum'>Umum</option>";
            }
            else{
              echo "<option selected='selected' value='Mainan Anak Perempuan'>._.</option>";
            }
          ?>
        </select>
      </td>
      </tr>
      <tr>
        <td>Harga Barang</td>
        <td>:</td>
        <td><input type="text" name="harga" value="<?php echo $key['harga_barang']?>"></td>
      </tr>
      <tr>
        <td>Stok Barang</td>
        <td>:</td>
        <td><input type="text" name="stok_barang" value="<?php echo $key['stok_barang']?>"></td>
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
            <input type="submit" name="proses_edit_barang" value="PROSES">
        </td>
      </tr>
    </table>
  </form>
  <?php
      }
    ?>
  <!-- jQuery -->
    <script src="<?php echo base_url()?>bootstrap/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
    
