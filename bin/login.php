<?php
include "koneksi.php";

if(isset($_POST['login'])){
 $user = $_POST['username'];
 $pass = $_POST['password'];


 $sql   = "select * from sys_user where username='".$user."'AND password='".$pass."'";
 $query = mysqli_query($db, $sql);
 
    // $result   =mysqli_query($conn, $sql);
    $num_rows = mysqli_num_rows($query);
    $row      = mysqli_fetch_row($query);

    if($num_rows>0){
        session_start();
        $_SESSION["nama"]=$row['username'];
        $_SESSION["pass"]=$row['password'];
        // echo "<script>location='AdminLTE-master/index.html';</script>";
        echo "oke";
    } else {
        echo "<script>alert('Username atau Password Admin tidak benar !!!');</script>";
        echo "<script>location='login.php';</script>";
    }
}
?>