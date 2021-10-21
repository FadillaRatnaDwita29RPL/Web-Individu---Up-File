<?php include './koneksi.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="profile.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Profile</title>
</head>
<body>

    <?php 
        session_start();
        $qry=mysqli_query($conn,"select * from user where email = '".$_SESSION['email']."'");
        $qry_user=mysqli_query($conn,"select * from user join class on user.id_class=class.id_class where email = '".$_SESSION['email']."'");
        $dt_user=mysqli_fetch_array($qry);
        $data_user=mysqli_fetch_array($qry_user);
    ?>
    <div class="container">
        <div class="bg">
        <div class="button">
                
                <a href="profile.php"><button class="edit" type="submit">EDIT</button></a>
                <a href="delete.php"><button class="out" onclick="return confirm('Are you sure to delete your account?')">DELETE</button></a>
            </div>
        </div>
        
        <div class="prof">
            <div class="image">
                <?php if(!$dt_user['photo']) {?>
                    <img src="usericon.jpg" alt="Profile" class="profil">
                <?php }else{ ?>
                <img src="<?php echo "file/".$dt_user['photo']; ?>" alt="Profile User" class="profil">
                <?php } ?>
            </div></a>

            <div class="identity">
                <h3 class="name"><?=$dt_user['name']?></h3>
                <p class="job"><?=$dt_user['education']?></p>
            </div>
        </div>
    </div>

    <div class="profile">
        <div class="quest">
            <h3>ID User</h3>   
            <h3>Age</h3>
            <h3>Gender</h3>
            <h3>Address</h3>
            <h3>Date of Birth</h3>
            <h3>Education</h3>
            <h3>Class</h3>
            <h3>ID Class</h3>
            <h3>Phone Number</h3>
            <h3>Email</h3>
            <h3>Password</h3>
        </div>
        
        <div class="form">
            <input type="text" name="id_user" value="<?=$dt_user['id_user']?>" readonly>
            <br>
            <input type="number" name="age" value="<?=$dt_user['age']?>" readonly>
            <br>
            <input type="text" name="gender" value="<?=$dt_user['gender']?>" readonly>
            <br>
            <input type="text" name="address" value="<?=$dt_user['address']?>" readonly>
            <br>
            <input type="date" name="date_birth" value="<?=$dt_user['date_birth']?>" readonly>
            <br>
            <input type="text" name="education" value="<?=$dt_user['education']?>" readonly>
            <br>
            <input type="text" name="class" value="<?=$data_user['name_class']?>" readonly>
            <br>
            <input type="text" name="id_class" value="<?=$data_user['id_class']?>" readonly>
            <br>
            <input type="text" name="phone_number" value="<?=$dt_user['phone_number']?>" readonly>
            <br>
            <input type="email" name="email" value="<?=$dt_user['email']?>" readonly>
            <br>
            <input type="password" name="password" value="<?=$dt_user['password']?>" readonly>
            <br>
        </div>
    </div>

    <div class="sosbar">
        <a href="index.php"><i class="fas fa-home"></i></a>
    </div>

   
</body>
</html>