<?php

if($_POST){
    $id_kelas=$POST['id_kelas'];
    $nama_kelas=$_POST['nama_kelas'];
    $kelompok=$_POST['kelompok'];
    $angkatan=$_POST['angkatan'];
    if(empty($nama_kelas)){
        echo "<script>alert('nama kelas tidak boleh kosong');location.href='update_kelas.php';</script>";
    } elseif(empty($kelompok)){
        echo "<script>alert('kelompok tidak boleh kosong');location.href='update_kelas.php';</script>";
    } else {
        include "koneksi.php";
            $update=mysqli_query($conn,"update kelas set nama_kelas='".$nama_kelas."',kelompok='".$kelompok."', angkatan='".$angkatan."' where id_kelas = '".$id_kelas."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update kelas');location.href='tampil_kelas.php';</script>";
            } else {
                echo "<script>alert('Gagal update kelas');location.href='update_siswa.php';</script>";
        }
    }
}

?>  
