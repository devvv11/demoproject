<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../Css/admin.css?v=<?php echo time();?>">
    <title>Admin -Login</title>
</head>
<body>
    
        <header id="header-section">
            <h2>ADMIN LOGIN</h2>
        </header>
<div class="main">
    <div class="main-box"></div>
    <div class="box">
            <form action="../Backend/admin(backend).php" method="post">

             <div class="input-icons">
                <i class="fa fa-user icon"></i>
                <input class="input" type="text" name="username" placeholder="  username" required><br><br>
            
                <i class="fa fa-lock icon"></i>
                <input class="input" type="password" name="password" placeholder="password" required><br>

                <button class="button" value="Login">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"></path>
                </svg>

                <div class="text">       
                    Login
                </div>
                </button>
                 
             </div>
            </form>
        </div>
    </div>

</body>
</html>