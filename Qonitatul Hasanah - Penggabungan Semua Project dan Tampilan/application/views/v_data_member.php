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

    <title>Data Member</title>

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

    <a class="btn btn-primary" href="<?=base_url()?>member/form_tambah_member/">Tambah Member</a></br>
        <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th><i class="icon_profile"></i> No</th>
                    <th><i class="fa fa-barcode"></i> Kode Member</th>
                    <th><i class="fa fa-user"></i> Nama Member</th>
                    <th><i class="fa fa-info"></i> Alamat Member</th>
                    <th><i class="fa fa-envelope"></i> Alamat Email</th>
                    <th><i class="fa fa-phone"></i> No.Telp</th>
                    <th><i class="fa fa-key"></i> Username</th>
                    <th><i class="fa fa-key"></i> Password</th>
                    <th><i class="fa fa-gear"></i> Option</th>
                </tr>
            </thead>
    <?php
        $no=1;
        foreach ($view as $data) {
            echo
            "<tr>
                <td>$no</td>
                <td>".$data['kd_member']."</td>
                <td>".$data['nama_member']."</td>
                <td>".$data['alamat_member']."</td>
                <td>".$data['email_member']."</td>
                <td>".$data['tlp_member']."</td>
                <td>".$data['username']."</td>
                <td>".$data['password']."</td>
                <td>
                <a href='".base_url()."member/update_member/".$data['kd_member']."'>Edit</a> | <a href='".base_url()."member/delete_member/".$data['kd_member']."'>Delete</a>
                </td>
            </tr>";
            $no++;
        }
    ?>
    </table>
    </div>
    <!-- jQuery -->
    <script src="<?php echo base_url()?>bootstrap/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>