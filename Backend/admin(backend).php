<?php
session_start();
include('connection.php');
$uname=$_POST['username'];
$pass=$_POST['password'];

$r="SELECT username,password FROM `admin` WHERE username='$uname' and password='$pass'";
$result = mysqli_query($conn, $r);

if(mysqli_num_rows($result) > 0) {
    $sql="SELECT username,password FROM `admin` WHERE username='$uname'";
    $resultgroup = mysqli_query($conn, $sql);

    if(mysqli_num_rows($resultgroup) > 0){
            $groups=mysqli_fetch_all($resultgroup,MYSQLI_ASSOC);
            $_SESSION['groups']=$groups;
    }
            $data=mysqli_fetch_array($result);
            $_SESSION['data']=$data;

            echo "<script>
        alert('Welcome Admin');
        window.location='../Frontend/adminhome.php';
        </script>";
}
    else{
        echo "<script>
        alert('You're not a Admin');
        window.location='../Frontend/login.php';
        </script>";
    }
