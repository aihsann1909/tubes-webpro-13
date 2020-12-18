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
                        <a class="nav-link" href="<?= base_url('home') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('about') ?>">About Us</a>
                    </li> 
                    <li class="nav-item active">
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

	<div class="p-4" style="background-color: #3a62d8;">
		<div class="container d-flex flex-row align-items-center justify-content-between" style="color: white;">
			<h2>Cdental – Software Rekam Medis dan Management Klinik Gigi</h2>
		</div>
	</div>

   <div class="container mt-5">
		<div class="container">
			<div class="d-flex container">
				<img src="./images/logo-Cdental.jpg" alt="" style="width: 400px; height:auto;">
			</div>
			<p>Cdental Software adalah Dental Management Software yang kami buat untuk memenuhi kebutuhan para dokter gigi dan klinik gigi yang didalamnya terdapat banyak fitur yang sangat dibutuhkan seperti :  Database pasien dan dokter, Appointment, Stock Inventory Obat dan Alat, Payment, Treatment, Provider Share, Treatment Plant, 3D Graphical Tooth Chart, Patient Images, Backup and Restore database.</p>
			<p>berikut kami jelaskan fungsi dari setiap fitur yang ada di Cdental dan di paling akhir dari sekilas tulisan ini ada tampilan video review tentang Cdental.</p>
			<li>Data Pasien</li>
            <p>Data pasien digunakan untuk menyimpan nama pasien, keluarga pasien, alamat, telp, foto pasien, dll. sehingga mempermudah dokter gigi ataupun klinik gigi untuk mencari data pasien.</p>
            <div class="container d-flex justify-content-between flex-column align-items-center">
                <img src="./images/pat.jpg" alt="" style="width: 600px; height:auto;">
                <img src="./images/detail-patient.jpg" alt="" style="width: 600px; height:auto;">
            </div>
            <li>Appointments</li>
            <p>Appointment pada Cdental Software ini sangat penting karena disini kita dapat mengatur pasien, membuat janjian, melihat ruangan mana yang kosong, melihat dokter siapa saja yang sedang praktek, jam berapa pasien harus datang, status pasien sudah dikerjakan ataupun masih menunggu, perkiraan lama pengerjaan, melihat nomer telp pasien dan data pasien untuk melakukan konfirmasi appointment, dll. Sehingga dibagian menu Appointment ini kita sangat akan terbantu dalam memanage pasien, dokter, ruangan dan waktu.</p>
            <div class="container d-flex justify-content-between flex-column align-items-center">
                <img src="./images/appt.jpg" alt="" style="width: 600px; height:auto;">
            </div>
            <li>Payment</li>
            <p>Menu payment digunakan untuk melakukan pembayaran ketika pasien selesai melakukan treatment. pada menu ini kita juga bisa melihat history payment dari pasient dan juga hutang piutang dari suatu pasient itu tertulis disini, sehingga bisa membantu mengingatkan jika ada pasien yang masih kurang dalam pembayaran ataupun pasien yang kelebihan didalam pembayarannya. Karena di Cdental Software ini semua tertata rapi dan sangat terstruktur, sehingga dokter gigi maupun suster akan sangat terbantu.</p>
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

    <script src="https://kit.fontawesome.com/e730ef9261.js" crossorigin="anonymous"></script>   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>