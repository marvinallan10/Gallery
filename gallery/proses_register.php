<?php
    include "koneksi.php";

    $username=$_POST['username'];
    $password=$_POST['password'];
    $namalengkap=$_POST['namalengkap'];

    $sql=mysqli_query($conn,"insert into user values('','$username','$password','$namalengkap')");

    header("location:login.php");
?>