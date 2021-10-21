<?php 
    include "koneksi.php";
    session_start();

    $sql = "delete from user where email = '" . $_SESSION['email'] . "'; ";

    $result = mysqli_query($conn, $sql);
    if($result){
        // echo "<script>alert('Success delete your account');</script>";
        unset($_SESSION['email']);
        header('Location: index.php');
    }else{
        echo "<script>alert('Fail delete your account');location.href='tampil_profile.php';</script>";
    }
?>
