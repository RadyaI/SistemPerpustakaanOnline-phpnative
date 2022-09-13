<?php include'navbar.php'; ?>
            <?php 

        include "koneksi.php";
        $qry_get_kelas=mysqli_query($conn,"select * from kelas where id_kelas = '".$_GET['id_kelas']."'");
        $data_kelas=mysqli_fetch_array($qry_get_kelas);
        ?>
        <h3>Update Kelas</h3>
        <form action="proses_update_kelas.php" method="post">
            <input type="hidden" name="id_siswa" value="<?=$data_kelas['id_kelas']?>">
            Nama kelas :
        <input type="text" name="nama_kelas" value="<?=$data_kelas['nama_kelas']?>" class="form-control">
            Kelompok :
        <input type="text" name="kelompok" value="<?=$data_kelas['kelompok']?>" class="form-control">
            Angkatan :
        <input type="text" name="angkatan" value="<?=$data_kelas['angkatan']?>" class="form-control"><br>
        <input type="submit" name="simpan" value="Update Kelas" class="btn" style="background-color:Coral;"><br><br><br><br><br>
        </form>
         <?php include'footer.php'; ?>