
<?php include'navbar.php'; ?>
       <h3>Data Siswa</h3>
       <a href="tambah_siswa.php"><input type="submit" name="" value="Tambah Siswa" class="btn" style="background-color:Coral;"></a>
       <table class="table table-hover table-striped">
        <thead>
            <th>NO</th><th>Nama Siswa</th><th>Tanggal Lahir</th>
            <th>Alamat</th><th>Gender</th>
            <th>Username</th><th>ID kelas</th><th>Aksi</th>
        </thead>
        <tbody>
            <?php
            include "koneksi.php";
            $qry_siswa=mysqli_query($conn,"select * from siswa ");
            $no=0;
            while($data_siswa=mysqli_fetch_array($qry_siswa)){
                $no++;?>
                <tr>    <td><?=$no?></td><td>
                    <?=$data_siswa['nama_siswa']?></td><td>
                    <?=$data_siswa['tanggal_lahir']?></td><td>
                    <?=$data_siswa['alamat']?></td><td>
                    <?=$data_siswa['gender']?></td><td>
                    <?=$data_siswa['username']?></td><td>
                    <?=$data_siswa['id_kelas']?></td><td>
                    <a href="update_siswa.php?id_siswa=<?=$data_siswa['id_siswa']?>" onclick="return confirm('Apakah anda yakin mengubah data ini?')" class="btn btn-success">Ubah</a> |
                    <a href="hapus_siswa.php?id_siswa=<?=$data_siswa['id_siswa']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-warning">Hapus</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
       </table> 
          <br><br><br><br>
            <?php include 'footer.php'; ?>