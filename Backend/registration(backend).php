<?php
include('connection.php');

$username=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];

$email_pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
if (!preg_match($email_pattern, $email)) {
    echo '<script>
    alert("Invalid email address");
    </script>';
}
if($cpass==$pass)
{
    $ins="INSERT INTO datas(`username`, `email`, `password`) VALUES ('$username','$email','$pass')";
    $query=mysqli_query($conn,$ins);
}
else
{
    echo '<script>
    alert("the password does not match");
    </script>';
} 

if(!$query)
{
    echo  '<script>
    alert("Registration Failed 🥲 try again....");
    window.location="../Frontend/register.php";
    </script>';
}
else{
    echo  '<script>
    alert("Registration Successfully");
    window.location="../Frontend/login.php";
    </script>';
}

?>


