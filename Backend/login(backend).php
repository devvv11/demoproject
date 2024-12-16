<?php
    session_start();
    include('connection.php');
    $username=$_POST['username'];
    $pass=$_POST['pass'];

    $sql=" select * from datas where username='$username' and password='$pass' ";
    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0)
    { 
        $sql="select username,email from datas where username='$username'";
        $resultgroup=mysqli_query($conn,$sql);
            if(mysqli_num_rows($resultgroup)>0)
            {
                $groups=mysqli_fetch_all($resultgroup,MYSQLI_ASSOC);
                $_SESSION['groups']=$groups;
            }
            $data=mysqli_fetch_array($result);
            $_SESSION['id']=$data['id'];
            $_SESSION['name']=$data['username'];
            $_SESSION['email']=$data['email'];

            $_SESSION['status']=$data['status'];
            $_SESSION['data']=$data;

            echo '<script>
            alert("Welcome user....");
            window.location="../index.php";
            </script>';
    }
    else{
        echo '<script>
        alert("Invalid username  or password");
        window.location="../Frontend/login.php";
        </script>';
    }
?>