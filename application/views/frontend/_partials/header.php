<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>SEKODE</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/css/custom.css');?>">
</head>

<body style="background:linear-gradient(
          rgba(0, 0, 0, 0.7), 
          rgba(0, 0, 0, 0.7)
        ), url(<?= base_url('assets/img/bg1.jpg');?>) ">
    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-md navbar-light bg-primary">
        <a href="<?php echo base_url(); ?>" class="navbar-brand text-white"><b>SEKODE</b></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse" style="padding: 0 70px 0 70px;">
            <div class="navbar-nav">
                <a href="<?= site_url('beranda');?>" class="nav-item nav-link text-white active">Home</a>
                <a href="<?= site_url('beranda/rekreasi');?>" class="nav-item nav-link text-white">Wisata Rekreasi</a>
                <a href="<?= site_url('beranda/kuliner');?>" class="nav-item nav-link text-white">Wisata Kuliner</a>
                <a href="<?= site_url('beranda/team');?>" class="nav-item nav-link text-white">Team</a>
            </div>
            <div class="navbar-nav ml-auto">
                <li class="dropdown">
                    <a class="nav-item nav-link text-white dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Daftar
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?= site_url('Daftar/rekreasi');?>">Daftar Wisata Rekreasi</a>
                        <a class="dropdown-item" href="<?= site_url('Daftar/kuliner');?>">Daftar Wisata Kuliner</a>
                    </div>
                </li>
                <a href="<?php echo site_url('Login') ?>" class="nav-item nav-link text-white">Masuk</a>
            </div>
        </div>
    </nav>
