<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landnig || page</title>
    <link rel="stylesheet" href="./Css/landing.css?v=<?php echo time();?>">
</head>
<body>
    <div class="header-section">
    <header>
        <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="./Frontend/addcomp.php">Add_computer</a></li>
                    <li><a href="./Frontend/Fedback.php">Feedbacks</a></li>
                    <li><a href="./Frontend/aboutus.php">About_us</a></li>
                    <?php 
                    session_start();
                    if(isset($_SESSION['data']))
                    {
                            echo " 
                            <li><a href='./Frontend/givepc.php'>Reg_for_pc</a></li>
                            <li><a href='./Frontend/dashboard.php'>Dashboard</a></li>
                            <li><a href='./Backend/logout.php'>Logout</a></li> ";
                    }
                    else
                    {
                        echo "  <li><div class='btn-section'> <a href='./Frontend/login.php'><input type='submit' value='Login' id='btn'></a>
                            <a href='./Frontend/register.php'><input type='submit' value='Sign-up' id='btn1'></a></div></li>";
                    }
                    ?>
                </ul>
        </nav>
    </header>
</div>
<h1 id="head"> Lab Management System</h1>
<p>
A Computer Lab Management System is a tool designed to streamline<br> the administration of computer labs, 
particularly in educational settings. <br>It helps manage users, 
including students and staff, by facilitating account<br> creation and assigning roles.
The system also tracks computer availability,<br> allowing for efficient scheduling and usage statistics to optimize resources.</p>
<!-- <div class="btn-section">
<a href="login.php"><input type="submit" value="Login" id="btn"></a>
<a href="register.php"><input type="submit" value="Sign-up" id="btn1"></a>
</div> -->
</body>
</html>