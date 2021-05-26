
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

    <title>Bookshop | E-learning</title>
    <link rel="shortcut icon" type="image/png" href="<?= base_url('tool/img/favicon.png'); ?>">
</head>

<body>
<!--========== Header Area ===========-->
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
                    <div class="lname"><a href=""><span><img src="<?= base_url('tool/img/favicon.png')?>"> Bookshop</span> & E-learning</a></div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-9 text-center">
                    <?php if($this->session->userdata('logged_in') == FALSE): ?>
                        
                        <a href="<?= base_url()?>users/login" class="btn-login"><i class="fas fa-sign-in-alt"></i> Login</a>
                        <a href="<?= base_url()?>users/registration" class="btn-login"><i class="fas fa-user-cog"></i> Register</a>

                    <?php else: ?>
                       
                      <div class="admin-search">
                        <?= form_open('users/search', ['id'=>'user-search'])?>
                            <input type="text" name="search_book" class="form-control" placeholder="Search any book">
                            <button type="submit"><i class="fas fa-search"></i></button>
                      <?= form_close()?>
                      </div>
                       
                        
                    <?php endif; ?>
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
<!--========== Menu Area =========-->
<div>
    <?php $this->load->view('temp/menu'); ?>
</div>
</div>
<!--=== Success msg ===-->
<?php 
    if($this->session->flashdata('login_success'))
    {
        print '<div class= "success-msg">';
        print '<div class = "container">'.$this->session->flashdata('login_success').'</div>';
        print '<div class="cross"><a href="" class="text-success"><i class="fas fa-times"></i></a></div>';
        print '</div>';
    }
?>

<!--============ Slider Area ===========-->
<div>
    <?php $this->load->view('temp/slider'); ?>
</div>
<!--==== Recent Books ====-->
<div class="section-padding after-slider">
    <div class="container">
        <div class="section-title"><a href="<?= base_url()?>users/all-books">recent Books</a></div>
        <div><?php $this->load->view('temp/recent_books') ?></div> 
    </div>   
</div>
<!--==== CSE Books ====-->
<div class="section-padding">
    <div class="container">
        <div class="section-title"><a href="<?= base_url()?>users/all-books/?ctg=CSE">Computer science and engineering Books</a></div>
        <div><?php $this->load->view('temp/cse_books') ?></div> 
    </div>   
</div>

<!--============ Footer Area ============-->
<div class="footer-area-home">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="widget">
                    <div class="brand-name">
                        <div class="lname"><a href=""><span>Bookshop</span> & E-learning</a></div>
                        <p>This is a online books market place, it allows you to sell & buy your favourite books. You can also find here different types of e-books, which you can download for free.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget">
                    <h3>Our Services</h3>

                    <ul>
                        <li><a href="<?= base_url('users/all_books')?>">Buy Books</a></li>
                        <li><a href="<?= base_url('users/all_ebooks')?>">Find E-books</a></li>
                        <li><a href="<?= base_url('user_home/sell_books')?>">Sell your books</a></li>
                        <li><a href="<?= base_url('users/terms')?>">Terms and conditions</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget">
                    <h3>Stay connected</h3>
                    <p>Communication is very much important for building good customer relationship. You can connected with us through the social media. If you have any types of quiries fell free to ask. You are always welcome.</p>
                        <div id="social-icon">
                            <span><a href="https://www.facebook.com/jignesh.ameta.9/" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a></span>
                            <span><a href="https://github.com/" title="Github" target="_blank"><i class="fab fa-github"></i></a></span>
                            <span><a href="https://www.linkedin.com/in/jignesh-ameta-621772134/" title="LinkedIn" target="_blank"><i class="fab fa-linkedin"></i></a></span>
                        </div>
                </div>
            </div>
        </div>
        <div class="copy-right">
            <p><i class="fas fa-copyright"></i> 2021 Project By Jignesh Ameta <br>All right reserved</p>
        </div>
    </div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="<?= base_url('tool/js/popper-1.12.9.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('tool/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('tool/js/all.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('tool/js/owl.carousel.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('tool/js/main.js'); ?>"></script>

</body>

</html>
