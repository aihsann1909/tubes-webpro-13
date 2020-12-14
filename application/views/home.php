<?php
defined('BASEPATH') OR exit('No direct script access allowed');
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
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('about') ?>">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cdental</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </ul>
            </span>
        </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./images/welcome.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./images/app-dev.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./images/dental-IT.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="d-flex mt-4" style="align-items:center; flex-direction:column; font-size:15px;">
        <p>Welcome to Lecylia IT and Software’s Official Website</p>
        <p>Kami adalah perusahaan yang bergerak dibidang Komputerisasi dan perancangan perangkat lunak baik untuk komputer, website maupun aplikasi Smartphone.</p>
    </div>

    <div class="service ml-5" style="font-weight:bolder; font-size:20px; color: blue;">
        <p>Services</p>
    </div>

    <div class="list-service d-flex flex-row justify-content-between m-5">
        <div class="card" style="width: 18rem; border:none;">
            <div class="circle">
                
            </div>
            <div class="card-body d-flex flex-column">
                <a href="#" class="d-flex flex-column align-items-center">
                    <h5 class="card-title" style="font-size:23px;">IT and Software Support</h5>
                    <p class="card-text">Kami memiliki banyak sekali pengalaman dibidang Teknologi Informasi baik Pembuatan Software maupun maintenance Hardware. Kami menerima kerjasama dengan perusahaan anda.</p>
                </a>
            </div>
        </div>
        <div class="card" style="width: 18rem; border:none;">
            <div class="circle">
                
            </div>
            <div class="card-body d-flex flex-column">
                <a href="#" class="d-flex flex-column align-items-center">
                    <h5 class="card-title" style="font-size:23px;">Dental IT</h5>
                    <p class="card-text">Dental IT adalah cabang baru dari ilmu IT yang memiliki spesialisasi dibidang IT untuk klinik gigi. Kami sangat perbengalaman dalam maintenance dan memiliki software khusus Klinik Gigi</p>
                </a>
            </div>
        </div>
        <div class="card" style="width: 18rem; border:none;">
            <div class="circle">
                
            </div>
            <div class="card-body d-flex flex-column">
                <a href="#" class="d-flex flex-column align-items-center">
                    <h5 class="card-title" style="font-size:23px;">Software Developer</h5>
                    <p class="card-text">Saat ini software sangat dibutuhkan untuk membantu pekerjaan di suatu perusahaan maupun toko. Kami sudah banyak membuat software untuk Klinik gigi, Instansi, Toko dan pembuatan website</p>
                </a>
            </div>
        </div>
        <div class="card" style="width: 18rem; border:none;">
            <div class="circle">
                
            </div>
            <div class="card-body d-flex flex-column">
                <a href="#" class="d-flex flex-column align-items-center">
                    <h5 class="card-title" style="font-size:23px;">Apps Developer</h5>
                    <p class="card-text">Mengikuti perkembangan teknologi yang sekarang ini merambah didunia Smartphone, kami juga mempunyai keahlian didalam pembuatan Aplikasi Smartphone. Mari buat aplikasi smarthone untuk perusahaan anda dengan kami.</p>
                </a>
            </div>
        </div>
    </div>

    <div class="cdental ml-5" style="font-weight:bolder; font-size:20px; color: blue;">
        <p>Cdental – Software Management dan Rekam Medis untuk Klinik Gigi</p>
        <iframe width="1200" height="512"
            src="https://youtube.com/embed/YftPbLuVjG8">
        </iframe> 
    </div>

    <div class="service ml-5" style="font-weight:bolder; font-size:20px; color: blue;">
        <p>The Team</p>
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