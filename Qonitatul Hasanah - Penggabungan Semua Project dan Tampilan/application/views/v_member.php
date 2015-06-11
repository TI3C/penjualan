<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage</title>

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
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Hello Welcome <?php echo $this->session->userdata('userpeg');?></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Product<span class="caret"></span></a>
                        
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="product.php">Mainan Anak Perempuan</a></li>
                            <li><a href="#">Mainan Laki-Laki</a></li>
                            <li><a href="#">Alat Rumah Tangga</a></li>
                            <li><a href="#">Umum</a></li>
                        </ul>
                    </li>
                </ul>

                <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <span class="badge"><?php echo count($this->cart->contents()) ?></span> <i class="fa fa-1x fa-shopping-cart"></i><span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <form class="navbar-form" action="">
                                <a href="<?php echo base_url().'barang/view_checkout' ?>" class="btn btn-custom btn-sm masuk">Detail Penjualan</a>
                            </form>
                            <a href="sign-up.php"><h6><center>Need an Account?</center></h6></a>
                        </ul>
                    </li>
                    
                    <?php if (!$this->session->userdata('userpeg')): ?> 
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Sign In<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <h6><center>Please Sign In</center></h6>
                                <form class="navbar-form" action="<?=base_url()?>login" method="post">
                                  <input type="text" class="input-sm form-control masuk" name="username" placeholder="Username">
                                  <input type="text" class="input-sm form-control masuk" name="password" placeholder="Password">
                                  <input type="submit" class="btn btn-primary btn-sm" name="proses_login" value="Sign In">
                                  <a href="<?=base_url()?>member/form_register/" class="btn btn-danger btn-sm">Sign Up</a>
                                </form>
                            </ul>
                        </li>
                    <?php else:  ?>
                        <li><a href="<?=base_url()?>login/logout_user">Logout</a></li>
                    <?php endif ?>
                </ul>
            </div>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <p class="lead">Shop Name</p>
                <div class="list-group">
                    <a href='#' class='list-group-item'>Alat Rumah Tangga</a>
                    <a href='#' class='list-group-item'>Mainan Anak Perempuan</a>
                    <a href='#' class='list-group-item'>Mainan Anak Laki-Laki</a>
                    <a href='#' class='list-group-item'>Umum</a>
                </div>
            </div>

            <div class="col-md-9">
                <div class="row">

                   

                   

                    <?php
                        foreach ($view as $data) 
                        {
                            echo "   
                                <div class='col-sm-4 col-lg-4 col-md-4'>
                                 <form action='".base_url()."barang/add_keranjang' method='post'>
                                    <div class='thumbnail'>
                                        <img src='".base_url()."upload/".$data['gambar']."' width='80'>
                                        <div class='caption'>
                                            <h4 class='pull-right'>".$data['harga_barang']."</h4>
                                            <h4>".$data['nama_barang']."</h4>  
                                            <h5>Stok : ".$data['stok_barang']."</h5>
                                            <h5>Jumlah Barang :</h5> <input type='text' name='jumlah_barang' size='1'> 
                                        <input type='hidden' name='id' value='".$data['kd_barang']."'>
                                        <input type='hidden' name='harga' value='".$data['harga_barang']."'>
                                        <input type='hidden' name='nama' value='".$data['nama_barang']."'>

                                        <input type='submit' class='btn btn-primary' name='proses_buy'>DETAIL</button>
                                        <input type='button' class='btn btn-custom' data-toggle='modal' data-target='#myModal'>DETAIL</button>
                                        </div> 
                                    </div>
                                     </form>
                                </div>    
                                ";
                        }  
                    ?>

                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo base_url()?>bootstrap/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
     