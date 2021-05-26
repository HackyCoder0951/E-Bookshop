<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100i,300,300i,400,700" rel="stylesheet">

    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('tool/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('tool/css/all.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('tool/css/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('tool/css/style.css'); ?>">

    <script type="text/javascript" src="<?= base_url('tool/js/jquery-3.2.1.slim.min.js'); ?>"></script>

    <title>Quick Start with codeIgniter</title>
     <link rel="shortcut icon" type="image/png" href="<?= base_url('tool/img/favicon.png'); ?>">
</head>
<body>
<!--===================== Header Area ================= -->
<div class="header-area">
	<div class="container-fluid">
		<div class="row">
				<div class="logo">
					<?= anchor("welcome", '<i class="fas fa-home ic"></i>'); ?> <span>Home</span>
				</div>
		</div>
	</div>
</div>
<div class="padding-bottom"></div>

<!-- ==================== Content area ================= -->
<div class="container">
	<h1>Welcome to codeIgniter.Lets custom in your way...</h1>
</div>


<!--===================== Footer Area ================= -->
<div class="padding-top"></div>
<div class="foter-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 ofsett-3">
                <p>&copy Tahmid Nishat | 2019<br>
                Email : tahmid.ni7@gmail.com</p>
                <div class="social-links">
                      <?= anchor("https://www.facebook.com/iamTahmid.ni7", '<i class="fab fa-facebook ic"></i>',['title'=>'Facebook', 'target'=>'_blank']); ?>
                      <?= anchor("https://github.com/tahmid-ni7", '<i class="fab fa-github ic"></i>',
                      ['title'=>'gitHub', 'target'=>'_blank']); ?>
                      <?= anchor("https://www.instagram.com/tahmid_ni7/", '<i class="fab fa-instagram"></i>', ['title'=>'Instagram', 'target'=>'_blank']); ?>
                </div>
            </div>
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