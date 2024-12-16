<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login || page</title>
    <link rel="stylesheet" href="../Css/style.css?v=<?php echo time();?>">
   </head>
<body>
    <header class="header-section">Lab Manegement System </header>
    <a href="../Frontend/adminlogin.php" id="btn2">Login As Admin</a>
<div class="main-box"></div>
<div class="container">
    <span class="span">Login</span>
    
    <form class="form" action="../Backend/login(backend).php" method="post">
                <p>Welcome back User,</p>
            <input type="text" name="username" id="username" placeholder="username" required>

            <input type="password" name="pass" id="pass" placeholder="password" required>

            <p>Don't have an account?<a href="register.php"> Create an account<a></p>

            <input type="submit" value="Login">

            <p><a href="../index.php">Home</a></p>
            
    </form>
</div>
</body>
</html>