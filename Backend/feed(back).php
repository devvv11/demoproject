<?php
    $conn=mysqli_connect("localhost","root","","lab_management") or die ("connection failed");

    $name=$_POST['name'];
    $email=$_POST['email'];
    $msg=$_POST['msg'];


    $query="INSERT INTO `feedbacks`(`name`, `Email`, `feedback`) VALUES ('$name','$email','$msg')";
    $result=mysqli_query($conn,$query);

    if(!$result)
    {
        echo "<script>
        alert('sryy feedback couldn't send.....');
        window.location.href='../Frontend/Fedback.php';
        </script>";
    }
    else{
        echo "<script>
         alert('thank you for sending Feedback....❤️');
        window.location.href='../Frontend/Fedback.php';
        </script>";
    }
?>