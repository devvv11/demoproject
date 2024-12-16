<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register || page</title>
    <link rel="stylesheet" href="../Css/regstyle.css?v=<?php echo time();?>">
</head>
<body>
<header class="header-section">Lab Manegement System</header>
    <div class="main-box"></div>
    <div class="container">
    <span class="span">Sign-up</span>
    <form class="form" action="../Backend/registration(backend).php" method="post">
                <p></p>
            <input type="text" name="username" id="username" placeholder="username" required><br><br>

                <input type="text" name="email" id="email" placeholder="E-Mail" required>

                    <input type="password" name="pass" id="pass" placeholder="password" maxLength=8 required>

                    <input type="password" name="cpass" id="cpass" placeholder="Confirm password" required>

                        <input type="submit" value="Sign-in"> 
</div>
    </form>
</body>
</html>