<?php 
session_start();
    if($_SESSION['status_login']!=true){
        header('location: login.php');
    }
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

  <title>TOKO RADYA</title>
</head>

<body>
  <div class="container">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" id="mainNav" style="background: linear-gradient(5deg, rgba(0,0,0), rgba(192,192,192));">
                                            
      <div class="container-fluid">
        <a class="navbar-brand fs-3" href="#">Perpustakaan</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
          <ul class="navbar-nav ms-5" >
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="tampil_siswa.php">Data</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profil.php">home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="buku.php">Buku</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="history_peminjaman.php">History Peminjaman</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php" onclick="return confirm('Yakin nih mau logout?')">LogOut</a>
            </li>
          </ul>
        </div>
      </div>
    </nav><br><br><br><br>