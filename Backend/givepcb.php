<?php
session_start();
include('connection.php');

$name=$_POST['name'];
$addh=$_POST['addh'];
$age=$_POST['age'];
$time=$_POST['time'];
$time2=$_POST['time2'];
$type=$_POST['type'];
$email=$_SESSION['email'];

    $ins="INSERT INTO `givepc`(`name`, `email`, `addharno`, `age`, `time`,`time2`, `type`) VALUES ('$name','$email','$addh','$age','$time','$time2','$type')";
    $query=mysqli_query($conn,$ins);



if(!$query)
{
    echo  '<script>
    alert("Pc Registration Failed 🥲 try again....");
    window.location="../Frontend/givepc.php";
    </script>';
}
else{

    echo  '<script>
    alert("Pc Registration Successfully");
    window.location="../index.php";
    console.log(`$addh`);
    </script>';
}

?>


