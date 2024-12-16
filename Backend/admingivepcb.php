<?php
include("connection.php");

$sql = "select * from givepc";
   $data = mysqli_query($conn,$sql);
   $total = mysqli_num_rows($data);

        $no=$_POST['no'];

    $ins="UPDATE `givepc` `no`='[value-7]' Where='$id'";
    $query=mysqli_query($conn,$ins);


        if(!$query)
        {
            echo  '<script>
            alert("Pc no is not give");
            window.location="../Frontend/admingivepc.php";
            </script>';
        }
        else{
            echo  '<script>
            alert("Pc no is not give");
            window.location="../Frontend/admingivepc.php";
            </script>';
        }
?>