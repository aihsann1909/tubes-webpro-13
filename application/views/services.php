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
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('about') ?>">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('cdental') ?>">Cdental</a>
                    </li>
                    <li class="nav-item active">
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

	<div class="p-4" style="background-color: #3a62d8;">
		<div class="container d-flex flex-row align-items-center justify-content-between" style="color: white;">
            <h1>Services</h1>
			<h5><a href="<?= base_url('home') ?>" style="color: white;"> Lecylia IT and Software</a> > Services</h5>
		</div>
	</div>

   <div class="container mt-5">
		<div class="container">
			<p>Lecylia IT and Software menawarkan berbagai spesialisasi untuk memberi dukungan saat ini dan masa depan kebutuhan teknologi untuk Klinik Gigi dan perusahan Anda. Kami akan memberi dukungan kepada para dokter gigi untuk membangun Digital Dental Clinic dengan teknologi masa depan yang dapat membuat Klinik gigi anda maju dan berkembang.</p>
            <p style="font-weight:bolder; font-size:20px; color: blue;">Spesialisasi Kami :</p>
            <div class="service ml-5" >
                <div class="container d-flex flex-wrap justify-content-between" style="color: grey;">
                    <div class="anggota d-flex flex-column align-items-center m-5">
                        <img src="./images/Dental-IT (1).jpg" alt="" style="width: 150px; height: auto;">
                    </div>
                    <div class="anggota d-flex flex-column align-items-center m-5">
                        <img src="./images/it-and-software.jpg" alt="" style="width: 150px; height: auto;">
                    </div>
                    <div class="anggota d-flex flex-column align-items-center m-5">
                        <img src="./images/dental-imaging.jpg" alt="" style="width: 150px; height: auto;">
                    </div>
                    <div class="anggota d-flex flex-column align-items-center m-5">
                        <img src="./images/software-developer.jpg" alt="" style="width: 150px; height: auto;">
                    </div>
                    <div class="anggota d-flex flex-column align-items-center m-5">
                        <img src="./images/Dental-IT (1).jpg" alt="" style="width: 150px; height: auto;">
                    </div>
                    <div class="anggota d-flex flex-column align-items-center m-5">
                        <img src="./images/Dental-IT (1).jpg" alt="" style="width: 150px; height: auto;">
                    </div>
                    <div class="anggota d-flex flex-column align-items-center m-5">
                        <img src="./images/Dental-IT (1).jpg" alt="" style="width: 150px; height: auto;">
                    </div>
                </div>
            </div>
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