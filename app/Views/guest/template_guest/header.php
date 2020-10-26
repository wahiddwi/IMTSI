<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
  <link rel="stylesheet" href="<?php echo base_url() ?>/vendor/fontawesome-free/css/all.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/css/bootstrap.min.css">
  <link rel='stylesheet' type='text/css' media='all' href="<?php echo base_url() ?>/css/home.css">
  <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Piazzolla:wght@400;800&display=swap" rel="stylesheet">



  <title>IMTSI</title>
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url('/img/logo.png') ?>">

</head>

<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
      <a class="navbar-brand" href="#"><img src="<?php echo base_url('/img/logo.png') ?>" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="home">Beranda <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profil">Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Organisasi</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Kegiatan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Fasilitas</a>
          </li>
          <li class="nav-item">
            <?php if(logged_in()):?>
              <a class="nav-link" href="<?= base_url(route_to('logout'))?>">Logout</a>
            <?php else :?>
              <a class="nav-link" href="<?= base_url(route_to('login'))?>">Login</a>
            <?php endif;?>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <!-- navbar -->