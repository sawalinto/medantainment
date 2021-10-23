<?php 
$conn = mysqli_connect("localhost","root","","medantainment");

function query($query){
	global $conn;
	$result = mysqli_query($conn,$query);
	$rows=[];
	while ($row=mysqli_fetch_assoc($result)) {
		$rows[]=$row;
	}
	return $rows;
}
session_start();

if (!isset($_SESSION["login"])){
    header("Location: login");
    exit;
}



?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title><?= $data['title'] ; ?></title>

    <link rel="stylesheet" href="<?= BASEURL; ?>/css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- ========jquery=========== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <script src="<?= BASEURL; ?>/js/jq.js"></script> -->

</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 ">
                <!-- <div class="admin mt-5">
                    <a href="#" class="list-group-item list-group-item-action list-group-item-primary"><img class="img0" src="asset/admin.png" alt="">Admin</a>
                 </div> -->
                <div class="list-group fixed-top">

                    <a href="<?= BASEURL ; ?>/admin" class="list-group-item list-group-item-action list-group-item-primary nap home1"><i class="fas fa-home"></i>Home</a>
                    <a href="<?= BASEURL ; ?>/admin/slider" class="list-group-item list-group-item-action list-group-item-primary nap slider1"><i class="fas fa-sliders-h"></i>Slider</a>
                    <a href="<?= BASEURL ; ?>/admin/iklan" class="list-group-item list-group-item-action list-group-item-primary nap dokumen1"><i class="fas fa-desktop"></i>Iklan</a>
                    <a href="<?= BASEURL ; ?>/admin/wedding" class="list-group-item list-group-item-action list-group-item-primary nap klien1"><i class="fas fa-heart"></i>Wedding</a>
                    <a href="<?= BASEURL ; ?>/admin/wedding" class="list-group-item list-group-item-action list-group-item-primary nap klien1"><i class="fas fa-palette"></i>Design</a>
                    <a href="<?= BASEURL ; ?>/admin/wedding" class="list-group-item list-group-item-action list-group-item-primary nap klien1"><i class="fas fa-images"></i>Photo</a>
                    <a href="<?= BASEURL ; ?>/admin/klien" class="list-group-item list-group-item-action list-group-item-primary nap klien1"><i class="fas fa-users"></i>Klien</a>
                    
                </div>
            </div>
            <div class="col-lg-10">