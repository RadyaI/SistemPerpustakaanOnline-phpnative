
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>LOGIN (Perpus)</title>
</head>
<body>
<nav class="navbar navbar-expand-lg " style=" background: linear-gradient(5deg, rgba(0,0,0), rgba(192,192,192));">
  <div class="container-fluid">
    <a class="navbar-brand fs-3 text-light" href="#">PERPUSTAKAAN</a>
    <a class="nav-link text-dark" href="tambah_siswa.php">DAFTAR</a>
  </div>

</nav>
    <div class="row g-0" style="margin-top:90px;">
    <div class="col-md-4"></div>
    <div class="col-md rounded text-light" style=" background: linear-gradient(30deg, rgba(0,0,0), rgba(192,192,192)); padding:20px" >
        <form action="proses_login.php" method="post">
          <h3 align="center">LOGIN Perpustakaan</h3>
          Username:
          <input type="text" name="username" value="" class="form-control">
          password:
          <input type="password" name="password" class="form-control"><br>
         <center><input type="submit" name="login" class="btn btn-success" value="LOGIN" style=""></center>
      </form>
    </div>
    <div class="col-md"></div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<?php include'footer.php'; ?>