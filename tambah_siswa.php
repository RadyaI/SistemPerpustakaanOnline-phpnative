
<?php include 'navbar.php'; ?>
    <h3>Tambah Siswa</h3>
    <form action="proses_tambah_siswa.php" method="POST">
        Nama Siswa:
        <input type="text" name="nama_siswa" value="" class="form-control">
        Tanggal Lahir:
        <input type="date" name="tanggal_lahir" value="" class="form-control">
        Gender:
        <select name="gender" id="" class="form-control">
            <option value="-">-</option>
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
        </select><br>
        Alamat: 
        <textarea name="alamat" class="form-control"></textarea>
        Kelas:
        <select name="id_kelas" class="form-control">
            <option>-</option>
            <?php 
            include "koneksi.php";
            $qry_kelas=mysqli_query($conn,"select * from kelas");
            while($data_kelas=mysqli_fetch_array($qry_kelas)){
            echo '<option value="'.$data_kelas['id_kelas'].'">'.$data_kelas['nama_kelas'].'</option>';   
            }
            ?>
        </select>
        Username:
        <input type="text" name="username" value="" class="form-control">
        Password:
        <input type="password" name="password" value="" class="form-control"><br>
        <input type="submit" name="simpan" value="TambahSiswa" class="btn"  style="background-color:Coral;">
    </form>
<body>
   
  
<br><br><br>
    
        <?php include 'footer.php'; ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
    crossorigin="anonymous"></script>


</body>

</html>