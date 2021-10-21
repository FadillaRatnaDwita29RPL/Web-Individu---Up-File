<?php 
    if($_POST){
        $email=$_POST['email'];
        $password=$_POST['password'];
        if(empty($email)){
            echo "<script>alert('Email tidak boleh kosong');location.href='signin.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('Password tidak boleh kosong');location.href='signin.php';</script>";
        }else{
            include "./koneksi.php";
            $query = $conn->query("select * from user where email = '" . $email . "' and password = '" . md5($password) . "'");
            $user = $query->fetch_assoc();
            if(mysqli_num_rows($query)>0){
                session_start();
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('Location: index.php');
            }else{
                echo "<script>alert('Username dan Password tidak benar');location.href='signin.php';</script>";
            }
        }
    }
?>