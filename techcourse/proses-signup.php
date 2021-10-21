<?php 

    include './koneksi.php';
    session_start();

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
  
    $sql = "insert into user (name, email, password)
            values ('" . $name . "', '" . $email . "', '" .md5($password). "');
    ";

  
    
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>location.href='set-profile.php';</script>";
    }else{
        printf('Failed sign up: ' . mysqli_error($conn));
    }
 ?>