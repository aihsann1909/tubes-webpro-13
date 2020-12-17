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
            <a style="text-decoration:none; color:white;" href="#"><i class="fab fa-facebook-square"> Facebook</i></a>
            <a style="text-decoration:none; color:white;" href="#"><i class="fab fa-twitter-square"> Twitter</i></a>
            <a style="text-decoration:none; color:white;" href="#"><i class="fab fa-instagram-square"> Instagram</i></a>
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
                        <a class="nav-link" href="<?= base_url('home') ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
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
					<li class="nav-item active">
                        <a class="nav-link" href="<?= base_url('support') ?>">Support</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="<?= base_url('portofolio') ?>">Portofolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('contact_us') ?>">Contact Us</a>
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
			<h1>Support</h1>
			<h5><a href="<?= base_url('home') ?>" style="color: white;"> Lecylia IT and Software</a> > Support</h5>
		</div>
	</div>

  
  <br>

    <div class="container">
        <div class="container">
            <div class="container text-center">
                <img src="./images/customer.jpg" alt=""> 
            </div>
            <br>
            <p>Kami memberikan dukungan kepada semua klien kami supaya tidak ada kendala dalam menjalankan software kami maupun dalam menghubungi kami dan kami dapat dengan cepat menyelesaikan masalah yang terjadi dilapangan, karena dalam bidang IT yang paling penting adalah dukungan yang berkelanjutan supaya tidak terjadi hal-hal yang tidak diinginkan.</p>
            <div class="container text-center" style="font-weight:bolder; font-size:20px; color: blue;">
                <p> Lecylia IT and Software Support :</p>
            </div>
            <div class="container text-center" style="font-weight:bolder; font-size:20px; color: blue;">
                <p> Telp/Sms/WA : 087-836-854-906 </p>
            </div>
            <div class="container text-center" style="font-weight:bolder; font-size:20px; color: blue;">
                <p> Email : customer_service@lecylia.com / lecyliadentalit@gmail.com </p>
            </div>
            <p> Berikut software dukungan kami yang lainnya, Klik pada gambar untuk download :</p>
            <li><a href="https://www.avast.com/free-antivirus-download" target="_blank"><img class="image" src="images/avast.jpg" width="250px" height="90px"></a><br></li>
            <li><a href="https://www.teamviewer.com/en/?pid=google.tv.id_en_sn_desk_brand_teamviewer_ex.s.id&gclid=EAIaIQobChMI8pWX04LO2AIVwTUrCh1LYgp7EAAYASAAEgLVY_D_BwE" target="_blank"><img class="image" src="images/teamviewer.jpg" width="250px" height="90px"></a><br></li>
            <li><a href="https://lecylia.com/chrome/" target="_blank"><img class="image" src="images/chrome.jpg" width="300px" height="150px"></a><br></li>
            <li><a href="https://support.logi.com/hc/en-us#!/id_id/product/hd-webcam-c270/downloads" target="_blank"><img class="image" src="images/logitech.jpg" width="150px" height="150px"></a><br> <br><br><br></li>
            <p>Untuk kode aktivasi avast dapat anda dapatkan dengan mengirim email ke kontak kami, dan kami akan kirimkan kode aktivasinya.</p>
            <br><br><br><br>
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

    <script   script src="https://kit.fontawesome.com/e730ef9261.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>