<?php
defined('BASEPATH') or exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Lecylia IT and Software &#8211; Dental IT</title>

    <style>
        .panel-atas {
            display: flex;
            justify-content: space-between;
            background-color: #3a62d8;
            color: white;
            align-items: center;
            text-align: center;
        }

        .part-kiri {
            display: flex;
            flex-direction: row;
        }
        
        .part-kiri p {
            margin-left: 20px;
        }
    </style>
  </head>
  <body>
    <div class="panel-atas" style="font-size:13px;">
        <div class="part-kiri ml-5">
            <div>
                <p>087-836-854-906</p>
            </div>
            <div>
                <p>customer_service@lecylia.com</p>
            </div>
        </div>
        <div class="part-kanan mr-5">
            <img src="" alt="facebook">
            <img src="" alt="twitter">
            <img src="" alt="instagram">
        </div>
    </div>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light" style="background-color: #ffffff; font-size:15px;">
        <a class="navbar-brand ml-5" href="#">
            <img src="./images/lecylia-logo.jpg" width="200" height="70" alt="" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto"></ul>
            <span class="mr-4">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('home') ?>">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url('about') ?>">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('cdental') ?>">Cdental</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('services') ?>">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('product') ?>">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('support') ?>">Support</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="<?= base_url('portofolio') ?>">Portofolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('contact') ?>">Contact Us</a>
                    </li>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </ul>
            </span>
        </div>
    </nav>

	<div class="p-3" style="background-color: #3a62d8;">
		<div class="container d-flex flex-row align-items-center justify-content-between" style="color: white;">
			<h1>About Us</h1>
			<h5><a href="<?= base_url('home') ?>" style="color: white;"> Lecylia IT and Software</a> > About Us</h5>
		</div>
	</div>

   <div class="container">
		<div class="container">
			<div class="d-flex container">
				<img src="./images/about-us.png" alt="">
			</div>
			<p>Welcome to <b>Lecylia IT and Software.</b></p>
			<p>Terimakasih sudah mengunjungi website resmi kami. Berikut sedikit perjalanan kami sebagai perusahaan di bidang IT dan Software dengan berbagai pengalaman yang kami peroleh.</p>
			<p>Kami adalah perusahaan yang bergerak dalam bidang IT dan Software yang sudah mempunyai pengalaman sejak tahun 2007. Berawal menjadi Tim IT di perusahaan Textile terbesar se Jawa-Bali, Kami semakin mempunyai pengalaman yang sangat cukup di dunia IT, jaringan, dan maintenance komputer.</p>
			<p>Ditahun 2009 Kami menjadi Guru IT dan Robotic di salah satu Sekolah International di Solo, menjadikan wawasan kami tentang dunia IT semakin luas dan bukan hanya di komputer dan jaringan saja, melainkan di dunia Design Grafis dan Robotic yang mana tidak semua orang IT memiliki ilmu ini.</p>
			<p>Pada tahun 2011 kami mulai membuka usaha sendiri yang bergerak dibidang IT dan Software. dan kami menamakan perusahaan kami Lecylia IT and Software. Mulai dari sini, semua klient-klient kami yang dulu pernah menggunakan jasa kami dan mengetahui kami, mereka mulai menggunakan jasa kami untuk mengcover di bidang IT dan Software diperusahaan mereka.</p>
			<p>Kami membuka usaha kerjasama bagi perusahaan yang membutuhkan IT support dan pembuatan software. Kami tunggu kerjasamanya.</p>
			<p>Best Regards,</p>
			<p><b>Lecylia IT and Software</b></p>
		</div>
   </div>


    <footer style="display:flex; background-color:#070707; justify-content:space-between; font-size:12px;">
        <div class="d-flex flex-row justify-content-between m-5">
            <p style="color: #abababab;">© 2020 Tugas Besar Pemrograman Web</p>
        </div>
        <div class="d-flex flex-row justify-content-between m-5">
            <a href="mailto:hege@example.com" style="color: #abababab;">Design and Developed by KELOMPOK TUBES</a>
        </div>
    </footer>
   
    <!-- Optional JavaScript; choose one of the two! -->

    <script>
        $('.carousel').carousel({
            interval: 1000
        })
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>