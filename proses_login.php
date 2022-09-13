<?php 
    if($_POST){
        $username=$_POST['username'];
        $password=$_POST['password'];
        if(empty($username)){
            echo "<script>alert('Username tidak boleh kosong');location.href='login.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('Password tidak boleh kosong');location.href='login.php';</script>";
        } else {
            include "koneksi.php";
            $qry_login=mysqli_query($conn,"select * from siswa where username = '".$username."' and password = '".md5($password)."'");
            if(mysqli_num_rows($qry_login)>0){
                $data_login=mysqli_fetch_array($qry_login);
                 // mengecek apakah di dalam tabel tersebut ada kolomnya 
                session_start();
                $_SESSION['id_siswa']=$data_login['id_siswa'];
                $_SESSION['nama_siswa']=$data_login['nama_siswa'];
                $_SESSION['status_login']=true;
                // Mengecek siapa yg login 
                header("location: profil.php");   
                // setelah login menuju ke kelas tersebut (profil.php)
            } else {
                echo "<script>alert('Username dan Password tidak benar');location.href='login.php';</script>";
            }
        }
    }
  
?>