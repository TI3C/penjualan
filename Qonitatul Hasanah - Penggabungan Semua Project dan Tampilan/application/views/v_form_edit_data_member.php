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
    
    <title>Form Edit Data Member</title>

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
    <center><h2>Form Edit Data Member</h2></center>
    <form action="" method="post">
    <table class="table-responsive" border="0" align="center">
      <tr>
        <td width="126">Nama </td>
        <td width="10">:</td>
        <td width="144"><input type="text" class="form-control" placeholder="Nama Member" name="nama" value="<?php echo $key['nama_member']?>"></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><input type="text" class="form-control" placeholder="Alamat Member" name="alamat" value="<?php echo $key['alamat_member']?>"></td>
      </tr>
      <tr>
        <td>Email</td>
        <td>:</td>
        <td><input type="text" class="form-control" placeholder="Alamat Email"  name="email" value="<?php echo $key['email_member']?>"></td>
      </tr>
      <tr>
        <td>No. Telp</td>
        <td>:</td>
        <td><input type="text" class="form-control" placeholder="No.Telp Member"  name="telp" value="<?php echo $key['tlp_member']?>"></td>
      </tr>
      <tr>
        <td>Username</td>
        <td>:</td>
        <td><input type="text" class="form-control" placeholder="Username"  name="username" value="<?php echo $key['username']?>"></td>
      </tr>
      <tr>
        <td>Password</td>
        <td>:</td>
        <td><input type="text" class="form-control" placeholder="Password"  name="password" value="<?php echo $key['password']?>"></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td>
            <input type="submit" name="proses_edit_data_member" value="PROSES">
            <input type="reset" value="RESET">
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