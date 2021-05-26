<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--==== CSS =====-->

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('tool/css/bootstrap.min.css'); ?>">
    <!-- Font-awesome css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('tool/css/all.css'); ?>">
    <!-- Owl-carousel css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('tool/css/owl.carousel.min.css'); ?>">
    <!-- My css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('tool/css/style.css'); ?>">
    
    <!-- jQuery min js -->
    <script type="text/javascript" src="<?= base_url('tool/js/jquery-3.2.1.slim.min.js'); ?>"></script>

    <title>Bookshop | User Home</title>
    <link rel="shortcut icon" type="image/png" href="<?= base_url('tool/img/favicon.png'); ?>">
</head>

<body>
    <!--============ Header area ===========-->
    <div class="header-area">
        <div class="hearder-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="welcome-tx">Welcome to Online Book Shop !</div>
                    </div>
                    <div class="col-md-6">
                        <div class="social-icon">
                            <span>Follow : </span>
                                <a href="https://www.facebook.com/jignesh.ameta.9/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://github.com/" title="Github" target="_blank"><i class="fab fa-github"></i></a>
                                <a href="https://www.linkedin.com/in/jignesh-ameta-621772134/" target="_blank" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-mid">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="logo">
                            <div class="lname"><a href="<?= base_url()?>home"><span><img src="<?= base_url('tool/img/favicon.png')?>"> Bookshop</span> & E-learning</a></div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-9">
                              <div class="admin-search">
                                <?= form_open('users/search', ['id'=>'user-search'])?>
                                    <input type="text" name="search_book" class="form-control" placeholder="Search any book">
                                    <button type="submit"><i class="fas fa-search"></i></button>
                              <?= form_close()?>
                              </div>
                            </div>
                            <div class="col-md-3">
                                <div class="ic-cart"><a href="<?= base_url()?>cart"><i class="fas fa-shopping-cart"></i> Cart</a></div>
                                <!--=== cart item count ===-->
                                <?php if($this->cart->contents()): ?>
                                <div class="cart-count">
                                    <div><?php $rows = count($this->cart->contents());
                                    print $rows; ?></div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============= Menu Area ============-->
        <div>
            <?php $this->load->view('temp/menu'); ?>
        </div>
    </div>
    <!-- =============== single header ===========-->
    <div class="single-header-u">
        <div class="container">
            <span><a href="<?= base_url()?>home"><i class="fas fa-home"></i> Home</a></span>
        </div>
    </div>
    <div class="user-menu-area">
        <div class="container">
            <div class="user-menu">
            <ul>
                <li><a href="<?= base_url()?>user-home/sell-books">Sell Books</a></li>
                <li><a href="<?= base_url()?>user-home/myBooks">My books</a></li>
                <li><a href="<?= base_url()?>user-home/my-orders">My orders</a></li>
                <li><a href="<?= base_url('user-home/edit-profile/'.$this->session->userdata('id').'')?>">Edit profile</a></li>
                <li><a href="<?= base_url()?>users/logout"><i class="fas fa-power-off"></i> Logout</a></li>
            </ul>
            </div>
        </div>
    </div>
    <!--=========== Content-area ==========-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12" style="min-height: 500px">
                <?php $this->load->view($user_view); ?>
            </div>
        </div>
    </div>



    <!--============ Footer Area ============-->
    <div>
        <?php $this->load->view('temp/footer'); ?>
    </div>
