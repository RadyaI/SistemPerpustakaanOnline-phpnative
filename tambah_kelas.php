    <?php include 'navbar.php';?>

    <h3>Tambah Kelas</h3>
        <form action="proses_tambah_kelas.php" method="POST">
                Nama Kelas:
                <input type="text" name="nama_kelas" value="" class="form-control"><br>
                Kelompok:
                <input type="text" name="kelompok" value="" class="form-control"><br>
                Angkatan:
                <input type="text" name="angkatan" value="" class="form-control"><br>
               <div class="posisi">
               <input type="submit" name="simpan" value="TambahKelas" class="btn" style="background-color:Coral;">
               </div>
        </form> 
    
<body>
   
  
<br><br><br>
    
  <?php include 'footer.php';?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
    crossorigin="anonymous"></script>


</body>

</html>