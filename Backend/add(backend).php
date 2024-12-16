<?php
session_start();

    $con=mysqli_connect("localhost","root","","lab_management") or die("connection failed");


    $name=$_POST['name'];
    $cname=$_POST['cname'];
    $moth=$_POST['motherboard'];
    $cpu=$_POST['cpu'];
    $gpu=$_POST['gpu'];
    $bit=$_POST['bit'];
    $ram=$_POST['ram'];
    $rom=$_POST['rom'];


    $query="INSERT INTO `addcomp`(`name`, `cname`, `motherboard`, `cpu`, `gpu`, `bit`, `ram`, `rom`) VALUES ('$name','$cname','$moth','$cpu','$gpu','$bit','$ram','$rom')";
    $result=mysqli_query($con,$query);  

    if(!$result)
    {
        echo "<script>
        alert('can't add your new computer..');
        window.location='../Frontend/add computer.php';
        </script>";
    }
    else
    {
        echo "<script>
        alert('Your new computer is added...');
        window.location='../Frontend/addcomp.php';
        </script>";
    }
?>