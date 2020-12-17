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
					<li class="nav-item">
                        <a class="nav-link" href="<?= base_url('support') ?>">Support</a>
                    </li>
					<li class="nav-item active">
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
			<h1>Portofolio</h1>
			<h5><a href="<?= base_url('home') ?>" style="color: white;"> Lecylia IT and Software</a> > Portofolio</h5>
		</div>
	</div>

  
  <br><br>

    <div class="container">
        <div class="container">
            <div class="d-flex container">
            </div> 
            <p> Berikut adalah perusahaan dan tempat usaha yang bekerja sama dengan kami.</p>
            <ul>
            <li> CV. Gloria, Sukoharjo </li>
            <li> KDS, Solo </li>
            <li> MCP, Solo Baru </li>
            <li> UD Tohari, Solo </li>
            <li> Mellisa Hair and Beauty Clinic 1, Solo </li>
            <li> Mellisa Hair and Beauty Clinic 2, Solo </li>
            <li> Mudito Group, Solo </li>
            <li> dr. Senyum Indrakila, Sp.M, Solo </li>
            <li> Toko Yung dan King Balon, Solo </li>
            <li> Sekolah Al Azhar Pati, Pati </li>
            <li> Apotek Cahaya Surya, Karanganyar </li>
            <li> Apotek Vivo Mellisa, Solo </li>
            <li> Moto Lepek, Solo </li>
            <li> Contractors Community, Solo </li>
            <li> CV. Mutiara Agung Mulia, Solo </li>
            </ul>
        </div>
    </div> <br><br>

    <div class="container">
        <div class="container">
            <div class="d-flex container">
            </div> 
            <p> Berikut Dental Clinic yang bekerjasama dengan kami dalam Software Cdental maupun maintenance (Dental IT).</p>
            <ul>
            <li>Sherly Indratno and Associates Dental Clinic, Solo</li>
            <li>Aster Dental Clinic, Jakarta Selatan</li>
            <li>Vivo Dental Clinic, Solo</li>
            <li>Qta Dental Clinic, Solo</li>
            <li>Centerline Dental and Implant, Solo Baru</li>
            <li>Aditya Dental, Sragen</li>
            <li>Epione Dentistry, Solo</li>
            <li>PDGI Cabang Surakarta</li>
            <li>drg. Nur Andriyani, Solo</li>
            <li>Dens Dental, Sragen</li>
            <li>Klinik Gigi Sehat, Yogyakarta</li>
            <li>Opal Dental, Yogyakarta</li>
            <li>drg. William, Jakarta Barat</li>
            <li>Melati Orthodontic and Dental Care, Magelang</li>
            <li>Christianie Dental Care, Solo</li>
            <li>SmileXpress, Jakarta Pusat</li>
            <li>Platinum Dental Care, Tangerang</li>
            <li>Bethesda Dental Care, Jakarta Barat</li>
            <li>Quality Dental Care, Semarang</li>
            <li>Klinik Gigi Nadira Tusam, Semarang</li>
            <li>drg. Rudy Santoso, Kudus</li>
            <li>BSD Dental Centre, BSD</li>
            <li>Klinik Gigi Nadira MT. Haryono, Semarang</li>
            <li>Klinik Gigi Nadira Tlogosari, Semarang</li>
            <li>Klinik Gigi Bunda, Solo</li>
            <li>Klinik Gigi TriA, Sp.KG, Solo</li>
            <li>Klinik Gigi Nadira, Pati</li>
            <li>Klinik Gigi Nadira Ngalian, Semarang</li>
            <li>Klinik Gigi Nadira Kelud, Semarang</li>
            <li>Klinik Gigi Nadira Fatmawati, Semarang</li>
            <li>Klinik Gigi Nadira Tirto Agung, Semarang</li>
            <li>Klinik Gigi Nadira Sukun, Semarang</li>
            <li>D'Smile Dental Care, Klaten</li>
            <li>D’Smile Dental Care, Yogyakarta</li>
            <li>Arirang Dental, Jakarta Selatan</li>
            <li>RD Dental Center, Yogyakarta</li>
            <li>White Dental Care, Yogyakarta</li>
            <li>Syaify Dental, Yogyakarta</li>
            <li>Kuta Dental, Bali</li>
            <li>Ezmo Dental Aesthetic Clinic, Surabaya</li>
            <li>Geo Dental Care, Lampung</li>
            <li>Dental Studio MNC, Jakarta</li>
            <li>Mooi Dental Clinic, Surabaya</li>
            <li>Sunset Dental Bali, Bali</li>
            <li>Dental Police, Medan</li>
            <li>Sunset Dental Ubud, Bali</li>
            <li>Opal Dental Demangan, Yogyakarta</li>
            <li>Dental Place, Surabaya</li>
            <li>Henni and Friends Dental Clinic, Yogyakarta</li>
            <li>Praktek Bersama drg. Weny Setyaningsih, Sp.KG, Yogyakarta</li>
            <li>Praktek Bersama drg. Rosiani Dewi, Magelang</li>
            <li>Klinik drg. Darto Witarsa, Semarang</li>
            <li>Junarto Dental Care, Semarang</li>
            <li>FDI PDGI 2019</li>
            <li>drg. Martin W. Handoko dan drg. Stefanie, Magelang</li>
            <li>Trio Dental Clinic, Malang</li>
            <li>Falcon Orthodontic and Dental Care, Solo</li>
            <li>Klinik Gigi Kanina, Yogyakarta</li>
            <li>Klinik Gigi My Dentist, Semarang</li>
            <li>SWA Dental, Solo</li>
            <li>Praktek Dokter Gigi Apotek K24, Palembang</li>
            <li>Maximilian Dental Center, Surabaya</li>
            <li>Nasaky Dental Care, Aceh</li>
            <li>DCS (Dental Care Solution), Cimahi</li>
            <li>Nabila Dental Solution. Solo</li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="container">
            <div class="d-flex container">
            </div> 
                <p>Untuk melihat pemetaan penyabaran semua klien kami bisa klik <a href="https://www.google.com/maps/d/u/0/viewer?mid=1vRPxBvvoYyPHcScHQSxRmd4vOuo&ll=-1.7798031761585715%2C106.2027046&z=6" target="_blank"><strong><span style="color: #3366ff;">disini.</span></strong></a></p>
        </div>
    </div><br><br><br><br><br>


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

    <script src="https://kit.fontawesome.com/e730ef9261.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>