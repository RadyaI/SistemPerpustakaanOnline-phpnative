
<?php include'navbar.php'; ?>
<h3>Data Kelas</h3>
<a href="tambah_kelas.php"><input type="submit" name="" value="Tambah kelas" class="btn" style="background-color:Coral;"></a>
       <table class="table table-hover table-striped">
        <thead>
            <th>NO</th>
            <th>Nama Kelas</th>
            <th>Kelompok</th>
            <th>Angkatan</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php
            include "koneksi.php";
            $qry_siswa=mysqli_query($conn,"select * from kelas ");
            $no=0;
            while($data_kelas=mysqli_fetch_array($qry_siswa)){
                $no++;?>
                <tr>    <td><?=$no?></td><td>
                    <?=$data_kelas['nama_kelas']?></td><td>
                    <?=$data_kelas['kelompok']?></td><td>
                    <?=$data_kelas['angkatan']?></td><td>
                    <a href="hapus_kelas.php?id_kelas=<?=$data_kelas['id_kelas']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-warning">Hapus</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
       </table> 
       <br><br><br><br><br>
       <?php include'footer.php'; ?>